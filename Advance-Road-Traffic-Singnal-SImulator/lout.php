<?php

  // Inialize session
  session_start();

// Delete certain session
  unset($_SESSION['rid']);
  // Delete all session variables
  // session_destroy();

 // Jump to login page
 header('Location: testimonials.php');

  ?>