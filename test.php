<?php
//로그인 정보 외부파일 불러오기
require_once 'db_connect.php';

$conn = new mysqli($hn, $un, $pw, $database);

if($conn->connect_error) die ("connection failed:". $conn->connect_error );
//
//
$query= "INSERT INTO rental (film_id,name)
 values('이','이'),
  ('아','아')";
//

if ($conn->query($query)==TRUE) {
//
  echo "도서삭제가 완료되었습니다";
} else {
//
echo "도서삭제가 실패하였습니다";
}


 ?>
