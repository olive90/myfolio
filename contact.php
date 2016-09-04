<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "olivehasan99@gmail.com";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $message = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$name", $phone, $message, "From:" . $email);
  
  //Email response
  echo "<script>alert('Thank you for contacting me!');</script>";
  echo "Click <a href='index.html'>HERE</a> to back to the prevoous page.";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
	  echo "<script>alert('Contact could not make.Please try again!');</script>";
  }
?>
