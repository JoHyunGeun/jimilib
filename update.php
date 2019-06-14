<?php

//로그인 정보 외부파일 불러오기
require_once 'db_connect.php';

$conn = new mysqli($hn, $un, $pw, $database);

$id=$_POST['id'];
$name=$_POST['name'];
$hp1=$_POST['hp1'];
$hp2=$_POST['hp2'];
$hp3=$_POST['hp3'];
$email1=$_POST['email1'];
$email2=$_POST['email2'];
$address=$_POST['address'];
$hp = $hp1."-".$hp2."-".$hp3;
$email = $email1."@".$email2;

if($conn->connect_error) die ("connection failed:". $conn->connect_error );
//
//
$query= "UPDATE membership SET name='$name', address ='$address', phonenum = '$hp', email = '$email' WHERE id='$id'";
//
if ($conn->query($query)==TRUE) {
//
echo("
   <script>
     location.href = './searchadd.php';
   </script>
");

} else {
  echo("
  <script>
    window.alert('회원정보 변경에 실패하였습니다.')
    history.go(-1)
  </script>
");

}

$conn->close();

?>
