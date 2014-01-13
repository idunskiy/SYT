<html>
<head><title>PHP Mail Sender</title></head>
<body>
<?php

$message = '';

if (isset($_POST['email']) && !empty($_POST['email'])){
  if (mail($_POST['email'], $_POST['subject'], $_POST['body'], "From: name@yourdomain.com")){
    $message = "Email has been sent to <b>".$_POST['email']."</b>.<br>";
  }else{
    $message = "Failed sending message to
 <b>".$_POST['email']."</b>.<br>";
  }
}else{
  if (isset($_POST['submit'])){
$message = "No email address specified!<br>";
  }
}

if (!empty($message)){
   $message .= "<br><br>";
 }
?>
</body>
</html>