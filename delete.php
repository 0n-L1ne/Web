<?php
session_start();
$content = $_GET['content'];
$who = $_SESSION['name'];
$conn = mysqli_connect('localhost', 'root', '', 'jun'); //db연동
$sql = "delete from board where content='".$content."' and who =''" ; //쿼리
$result = mysqli_query($conn, $sql);  //conn 세션에서 sql 실행
header("Location: board.php"); //board.php 페이지로 이동
?>
