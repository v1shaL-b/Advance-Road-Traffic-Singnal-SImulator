<?php 
echo $rid=$_GET['rid'];
$ch = curl_init();
$user="nily0529@gmail.com:112233";
$receipientno="7030052927"; 
$senderID="TEST SMS"; 
$msgtxt= "Hi Your Vehicle No: $rid";
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; } 
curl_close($ch);
?>
	
		