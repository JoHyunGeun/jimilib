<?php
$a=$_POST['delete'];

//로그인 정보 외부파일 불러오기
require_once 'db_connect.php';

$conn = new mysqli($hn, $un, $pw, $database);

if($conn->connect_error) die ("connection failed:". $conn->connect_error );
//
//
$query= "DELETE FROM film where film_id='$a';";
//
if ($conn->query($query)==TRUE){
  echo("
        <script>
          window.alert('도서 삭제가 완료되었습니다.')
            location.href = './searchbookad.php';
        </script>
      ");
      exit;
} else  {

 echo("
        <script>
          window.alert('도서 삭제가 실패하였습니다.')
          history.go(-1)
        </script>
      ");
      exit;
}

 ?>
