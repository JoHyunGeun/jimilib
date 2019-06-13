<?php

//로그인 정보 외부파일 불러오기
require_once 'db_connect.php';

$conn = new mysqli($hn, $un, $pw, $database);




$a=$_POST['id'];
$b=$_POST['title'];
$c=$_POST['location'];
$d=$_POST['writer'];




if($conn->connect_error) die ("connection failed:". $conn->connect_error );
//
//
$query= "INSERT INTO film (film_id, title,rating,special_features)
 values('$a','$b','$c','$d')";
//
if ($conn->query($query)==TRUE) {
//
echo("
   <script>
     location.href = './searchbookad.php';
   </script>
");

} else {
  echo("
  <script>
    window.alert('도서추가에 실패하였습니다.')
    history.go(-1)
  </script>
");

}

$conn->close();

?>
