<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Board Page</h1>
    <form method = "post" action = "display.php">
    content : <input type = "text" name = "content" /> <br>
        <input type = "submit" /><br>
    </form>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'jun'); //db연동
        $sql = "select * from board " ; //쿼리
        $result = mysqli_query($conn, $sql);  //conn 세션에서 sql 실행
        while($row = mysqli_fetch_array($result)){
            echo $row['content'];
            echo "&nbsp;<button onclick=\"location.href='delete.php?content=".$row['content']."'\">삭제</button>";
            echo "<br>";
        }
        ?>
</body>
</html>