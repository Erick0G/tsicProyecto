<?php
session_start();

$conn = mysqli_connect(
  'mysql',
  'root',
  'admin',
  'ventaautos'
) or die(mysqli_erro($mysqli));

?>
