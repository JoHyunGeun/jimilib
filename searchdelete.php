 <?php
 //로그인 정보 외부파일 불러오기
 require_once 'db_connect.php';

 $conn = new mysqli($hn, $un, $pw, $database);
       // DB 선택
       $a=$_POST['mod'];

       if($conn->connect_error) die ("connection failed:". $conn->connect_error );
       //
       //
       $query= "DELETE FROM rental where film_id='$a';";
       //
       if ($conn->query($query)==TRUE) {
         echo("
               <script>
                 window.alert('도서 반납이 완료되었습니다.')
                   location.href = './searchbook.php';
               </script>
             ");
             exit;
       }else {
         echo("
               <script>
                 window.alert('도서 반납이 실패 ㅜㅜ.')
                   location.href = './searchbook.php';
               </script>
             ");
             exit;
       }
 ?>

 <?php include "./meta.php";
