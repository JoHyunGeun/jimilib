<?php
//로그인 정보 외부파일 불러오기
require_once 'db_connect.php';

$conn = new mysqli($hn, $un, $pw, $database);

$a=$_POST['author'];
$b=$_POST['title'];
$c=$_POST['type'];
$d=$_POST['year'];

if($conn->connect_error) die ("connection failed:". $conn->connect_error );
//
//
$query= "INSERT INTO mem (num, id,name,sex)
 values('$a','$b','$c','$d')";
//
if ($conn->query($query)==TRUE) {
//
  echo "New record created successfully";
} else {
//
//   echo "Error: ". $sql. "<br>. $conn->error;
}

$conn->close();

?>
