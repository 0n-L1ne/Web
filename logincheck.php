<?php 
session_start();
$id = trim($_POST['id']);
$pw = trim($_POST['pw']);
$idSaveCheck = trim($_POST['idSaveCheck']);
 
$conn = mysqli_connect('localhost', 'root', '', 'jun'); //db연동
$sql = "select * from user where id='".$id."' and pw ='".$pw."'" ; //쿼리
$result = mysqli_query($conn, $sql);  //conn 세션에서 sql 실행
while($row = mysqli_fetch_array($result)){ //목록 맨위에서부터 결과물 반환(목록은 query의 2번 실행 결과 즉, 조회 결과표)
   /*서버랑 클라이언트 사이의 연결에서의 변수(1회성)*/ $_SESSION['name'] = $row['name']; 
}
?>

<script>
    window.open('index.php', '_self');
</script>