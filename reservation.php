<?php
session_start();
require_once 'db_connect.php';
$conn = new mysqli($hn, $un, $pw, $database);
$title = $_POST['title'];
$special_features = $_POST['special_features'];
$userid = $_SESSION['userid'];
$query= "INSERT INTO reserv (userid, title, special_features) values('$userid', '$title', '$special_features')";
if ($conn->query($query)==TRUE) {
    echo("
        <script>
          window.alert('예약이 완료되었습니다.')
          history.go(-1)
        </script>
        ");
    exit;
} else {
    echo("
        <script>
          window.alert('Error !')
          history.go(-1)
        </script>
        ");
    exit;
}
$conn->close();
?>
