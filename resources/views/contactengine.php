<?php
use Input;

$EmailFrom = Trim(stripslashes($_POST['email'])); 
$EmailTo = "slavensakacic@gmail.com";

$Subject = "Forma sa slaven_laravel stranice";
$Name = Trim(stripslashes($_POST['name']));  
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// validation
// $validationOK=true;
// if (!$validationOK) {
//   print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
//   exit;
// }

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  echo "Error has occured";
}
?>