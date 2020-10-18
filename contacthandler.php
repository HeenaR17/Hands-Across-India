<?php
$name = $_POST[‘name’];
$email = $_POST[’email’];
$message = $_POST['message'];
$fp = fopen(”formdata.txt”, “a”);
$savestring = $name . “,” . $email . “,” . $message  “n” ;
fwrite($fp, $savestring);
fclose($fp);
echo “<h1>Your data has been saved in a text file!</h1>”;
?>