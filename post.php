<?php
// error_reporting(E_ALL); 
// ini_set('display_errors', '0');

$conn = mysqli_connect('localhost', 'root', '', 'jun');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    echo "ID is $id, PW is $pw";
    $sql = "INSERT INTO user(name, age, id, pw) VALUE('$name', $age, '$id', '$pw')";
    mysqli_query($conn, $sql); 
    
}
?> 