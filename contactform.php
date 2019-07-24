<?php

if(isset($_POST['submit']))
{
$name1 = $_POST['name'];
$mailForm = $_POST['mail'];
$subject1 = $_POST['subject'];
$message1 = $_POST['message'];

$mailTo = "harshalinehe1@gmail.com";
$headers = "from:".$mailForm;
$txt = "you have receive email from:".$name.".\n\n".$message;

mail($mailTo,$subject,$txt,$headers);
header("location: index.php?mailsend");

}

?>