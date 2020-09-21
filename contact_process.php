<?php
$name = $_REQUEST['name'];
$message = $_REQUEST['message'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];

if(empty($name) || empty($message) || empty($email) || empty(subject))
{
    echo "Plase fill the required field to get in touch with pranav kumar"
}
else{
    mail("pranavkofficial@gmail.com", "Webtech Message", $message , "From: $name < $email>");
    echo"<script type='text/javascript'>alert('your message sent succesfully');
    window.history.log(-1);
    </script>";
}
?>