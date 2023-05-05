<?php

session_start();
$content = $_POST['content'];
$who = $_SESSION['name'];
$conn = mysqli_connect('localhost', 'root', '', 'jun');
$sql = "INSERT INTO board(content, who) VALUE('$content', '$who')";
mysqli_query($conn, $sql); 


?>