#include <Arduino.h>
#include <ESP8266WiFi.h>
#include <ESP8266WiFiMulti.h>
#include <ESP8266HTTPClient.h>

//--------------------

#include <Wire.h>
#include <MFRC522.h>
#include <SPI.h>
#define RST_PIN 20 // RST-PIN for RC522 - RFID - SPI - Module GPIO15 
#define SS_PIN  2  // SDA-PIN for RC522 - RFID - SPI - Module GPIO2
MFRC522 myCard(SS_PIN, RST_PIN);   // Create MFRC522 instance
///---------------
/*
NODEMCU////////RFID//////////POWER SUPPLY(5V)/////////BUZZER//////
G-----------------------------------GND----------------------GND-----
VIN----------------------------------+5------------------------------
D4------------SDA----------------------------------------------------
3V------------3.3V---------------------------------------------------
GND------------GND---------------------------------------------------
D5-------------SCK---------------------------------------------------
D6-------------MISO--------------------------------------------------
D7-------------MOSI--------------------------------------------------
D8---------------------------------------------------------+G IN----

*/
#define USE_SERIAL Serial
ESP8266WiFiMulti WiFiMulti;
bool error;
String before="";
String next="";

void setup() {
    USE_SERIAL.begin(115200);
    delay(3000);
    WiFiMulti.addAP("SAMNIL", "12345678");

    //-------------------
    SPI.begin();           //  SPI bus
  myCard.PCD_Init();    //  MFRC522
  //----------------------
   pinMode(15,OUTPUT);// + sı d8 and buzzer
  USE_SERIAL.println("exit setup");

}

void loop() {

  if ( ! myCard.PICC_IsNewCardPresent()) // If you have not read a new card, go back to top
  {
    delay(250);
    return;
  }
  
  if ( ! myCard.PICC_ReadCardSerial()) // If several cards are brought close together, select one (errory is blocked) 
  {
     delay(250);
      return;   
  }
     
  //MFRC522::PICC_Type piccType = myCard.PICC_GetType(myCard.uid.sak);
  
  String content= "";
  for (byte i = 0; i < myCard.uid.size; i++) 
  {
    
     content.concat(String(myCard.uid.uidByte[i], HEX));
  }
  content.toUpperCase();
 
  myCard.PICC_HaltA(); // Card handling
  Serial.println("card read" + content);
  
  next = content;
  
  
  if(before=="")
  {
  //-------------------------------------------
    if((WiFiMulti.run() == WL_CONNECTED))
     {
     
                 

        HTTPClient http;
        USE_SERIAL.print("[HTTP] begin...\n");
         USE_SERIAL.println("Connected off");
        // space is slack
        content.replace(" ", "");
        // get requested address write ip address of your local network computer
        String url;
        url = String("http://192.168.225.25/get.php?temp="+content);
        //http://ardom.merakla.com/arduoku.php?oku
        http.begin(url); //HTTP
        int httpCode = http.GET();
        if(httpCode > 0)
         {
            USE_SERIAL.printf("[HTTP] GET... code: %d\n", httpCode);
            if(httpCode == HTTP_CODE_OK) 
            {
                String payload = http.getString();
                

              //Basarili sekilde gonderilir ise Serial ekrana ok+content yazaktýr
                
                if(payload == "ok")
                { 
                  USE_SERIAL.println("payload = ok so the data went to the site");
                digitalWrite(15,1);
                 delay(75);
                digitalWrite(15,0);
                delay(75);
                digitalWrite(15,1);
                 delay(75);
               digitalWrite(15,0);
                  USE_SERIAL.println(payload);
                  
                 
              }

              else
              {
                
                  digitalWrite(15,1);
                 delay(2000);
                 digitalWrite(15,0);
              }

            }

        }
        
         else
          {
            USE_SERIAL.printf("[HTTP] GET... failed, error: %s\n", http.errorToString(httpCode).c_str());
            
                 
                 digitalWrite(15,1);
                 delay(2000);
                 digitalWrite(15,0);
        }
        http.end();
    }
  }  
      next = next;
    
}


