<?php session_start();
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "mhuhzmvm_0207", "12345", "mhuhzmvm_0207");

if ($mysqli == false) {
  print("error");
} else {
$inputValue=$_POST['value'];
$item=$_POST['item'];
$id=$_SESSION['id'];
$mysqli->query("UPDATE `users` SET `$item` = '$inputValue' WHERE `id` = '$id'");

echo $inputValue;
echo $item;

$_SESSION[$item]=$inputValue;
}
