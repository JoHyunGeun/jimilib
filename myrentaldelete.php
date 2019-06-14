<?php
session_start();
$title = $_POST['title'];
$special_features = $_POST['special_features'];
$userid = $_SESSION['userid'];
require_once 'db_connect.php';
$conn = new mysqli($hn, $un, $pw, $database);
if($conn->connect_error) die ("connection failed:". $conn->connect_error );
$query= "DELETE FROM reserv where title='$title' and userid='$userid' and special_features='$special_features'";

if ($conn->query($query)==TRUE){
  echo("
        <script>
          window.alert('예약이 취소되었습니다.')
            location.href = 'myrental.php';
        </script>
      ");
      exit;
} else  {
 echo("
        <script>
          window.alert('예약 취소가 실패하였습니다.')
          history.go(-1)
        </script>
      ");
      exit;
}
?>
