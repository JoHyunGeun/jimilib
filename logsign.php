<?php
session_start();
?>
<meta charset="utf-8">
<?php
$a=$_POST['id'];
$b=$_POST['pw'];

if(!$a){
    echo("
        <script>
          window.alert('아이디를 입력하세요.')
          history.go(-1)
        </script>
        ");
    exit;
}

if(!$b){
    echo("
        <script>
          window.alert('비밀번호를 입력하세요.')
          history.go(-1)
        </script>
        ");
    exit;
}

//로그인 정보 외부파일 불러오기
require_once 'db_connect.php';
$conn = new mysqli($hn, $un, $pw, $database);
$result = $conn->query("SELECT * FROM membership where id='$a'");

while($row=$result->fetch_assoc()) {
    if($row['id']==$a) {
        $userid = $a;
        $username = $row['name'];
        $useradmin = $row['admin'];
    }

    if($row['password']==$b) {
        $userpw=$b;
    }
}

if(!$userid) {
    echo("
        <script>
            window.alert('없는 아이디입니다.')
            history.go(-1)
        </script>
        ");
}elseif(!$userpw) {
    echo("
        <script>
            window.alert('비밀번호가 틀렸습니다.')
            history.go(-1)
        </script>
        ");
}



$_SESSION['userid'] = $userid;
$_SESSION['username'] = $username;
$_SESSION['useradmin'] = $useradmin;


echo("
    <script>
        location.href = 'index.php';
    </script>
    ");
?>
