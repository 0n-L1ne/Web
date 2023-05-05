<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WebHacking</h1>
    hi <?=$_SESSION['name']?>
    <button onclick="window.open('login.php','_self')">로그인</button>
    <button onclick="window.open('resign.php','_self')">회원가입</button>
    <button onclick="window.open('board.php','_self')">게시판</button>
    <button onclick="window.open('logout.php','_self')">로그아웃</button>
</body>
</html>