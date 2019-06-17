<?php
  //로그인 정보 외부파일 불러오기
  require_once 'db_connect.php';
  $conn = new mysqli($hn, $un, $pw, $database);

	 // select 문 수행
	    $a=$_POST['film_id'];
	    $b=$_POST['name'];
	    $c=$_POST['rental'];
	    $date= strtotime($c.'+10 days');
	    $d = date('Y-m-d', $date);
      $num = 0;

$result = $conn->query("SELECT * FROM membership WHERE id = '$b'");
$num_rows = $result->$num_rows;
if ($num_rows == 0) {
  echo("
    <script>
    window.alert('없는 사용자입니다.')
    history.go(-1)
    </script>
    ");
}

$result = $conn->query("SELECT * FROM reserv WHERE REPLACE(title, '','') like '%$a%' ORDER BY time_stamp ASC");
while ($row = $result->fetch_assoc()) {
	if($row[title]==$a) { #도서가 예약되어있는지 확인
		#도서가 예약되어있는 경우
    $num =1;
		if ($row[userid]==$b) { # 예약된 도서를 예약한 사람에게 대출하는 경우
      $query ="INSERT INTO rental (film_id, name,rental,back) values('$a','$b','$c','$d');";
      $result_end = mysqli_query($conn,$query) or die(mysqli_error($conn));
      $query = "INSERT INTO rentalrecord (film_id, name) values('$a','$b');";
      $result_end = mysqli_query($conn,$query) or die(mysqli_error($conn));
      $query = "DELETE FROM reserv WHERE title='$a';";
      $result_end = mysqli_query($conn,$query) or die(mysqli_error($conn));
			echo("
					<script>
          window.alert('대여완료.')
					location.href = './searchbook.php';
					</script>
					");
				break;
		}else{  # 예약된 도서를 다른사람이 대여하려는 경우
			echo("
				<script>
				window.alert('예약된 도서입니다.')
				history.go(-1)
				</script>
				");
				break;
		}
	}}

  if($num == 0){ #도서가 예약되어있지 않은경우
		$resu = $conn->query("SELECT * FROM film WHERE REPLACE(title, '','')like '%$a%'");
    $num_rows = $resu->$num_rows;
		if($num_rows == 0) { #도서가 존재
      $query ="INSERT INTO rental (film_id, name,rental,back) values('$a','$b','$c','$d');";
      $result_end = mysqli_query($conn,$query) or die(mysqli_error($conn));
      $query = "INSERT INTO rentalrecord (film_id, name) values('$a','$b');";
      $result_end = mysqli_query($conn,$query) or die(mysqli_error($conn));
      $query = "DELETE FROM reserv WHERE title='$a';";
      $result_end = mysqli_query($conn,$query) or die(mysqli_error($conn));

      // $insert = $conn->query("INSERT INTO rental (film_id, name,rental,back) values('$a','$b','$c','$d')"); # 대여
			// $rl = $conn->query("INSERT INTO rentalrecord (film_id, name) values('$a','$b')");  #대여기록에 저장
			// $de_reserv = $conn->query("DELETE FROM reserv WHERE title='$a'");
			echo("
					<script>
          window.alert('대여완료.')
					location.href = './searchbook.php';
					</script>
					");
		} else { #도서가 없음
		    echo("
		<script>
			window.alert('없는 도서입니다. 이름을 다시 확인해주십시오')
			history.go(-1)
		</script>
		");
	}
}

$conn->close();

?>
