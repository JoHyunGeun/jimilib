<?php


require_once 'db_connect.php';
$conn = new mysqli($hn, $un, $pw, $database);

if($conn->connect_error) die ("connection failed:". $conn->connect_error );

// 중복 체크
// $sql = "SELECT * FROM membership WHERE id='{$id}'";
// $resource =mysql_query($sql);
// $num = mysql_num_rows($resource);

if($_POST['userid'] != NULL) {
$id_check = "SELECT * FROM membership WHERE id='{$_POST['userid']}'";
$result = mysqli_query($conn, $id_check);
$row = mysqli_fetch_array($result);


if($row >= 1) {
   echo "이미 존재하는 아이디입니다.";
} else {
   echo "사용 가능한 아이디입니다.";
}
}


?>
