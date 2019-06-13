<?php
session_start();
$title = $_POST['mode'];
$id = $_SESSION['userid'];
$query= "INSERT INTO reserv (title, id) values('$title','$id')";
if ($conn->query($query)==TRUE) {
    echo("
        <script>
          window.alert('예약이 완료되었습니다.')
          history.go(-1)
        </script>
        ");
    exit;
} else {
}
$conn->close();
?>
