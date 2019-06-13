<?php
$a=$_POST['delete'];
//로그인 정보 외부파일 불러오기
require_once 'db_connect.php';

$conn = new mysqli($hn, $un, $pw, $database);

if ($conn->connect_error) {
    die("connection failed:". $conn->connect_error);
}
//
//
$query= "DELETE FROM reserv where title='$a';";
//
if ($conn->query($query)==true) {
    echo("
        <script>
          window.alert('예약 삭제가 완료되었습니다.')
            location.href = './searchreserv.php';
        </script>
      ");
    exit;
} else {
    echo("
        <script>
          window.alert('예약 삭제가 실패하였습니다.')
          history.go(-1)
        </script>
      ");
    exit;
}
