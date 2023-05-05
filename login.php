<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['id'])){
        $id = $_COOKIE['id'];
        $idSaveCheck = "checked";
    }
    ?>

    <script>
     function LoginCheck(){
        var F = document.LoginForm;
        if (F.userId.value==""){
            alert("ID를 입력해주세요");
            F.userId.focus();
            return false;
        }
        if (F.userPw.value==""){
            alert("PassWord를 입력해주세요");
            F.userPw.focus();
            return false;
        }
        F.action="LoginCheck.php";
        F.submit();
    }
    </script>
    
    <h1>Login Page</h1>
    <form method = "post" action = "logincheck.php">
        id : <input type = "text" name = "id" /> <br>
        pw : <input type = "text" name = "pw" /> <br><br>
        <input type = "submit" />
    </form>
</body>
</html>