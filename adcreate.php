<!-- meta.php -->
<?php
require_once 'db_connect.php';
$conn = new mysqli($hn, $un, $pw, $database);
?>
<?php include "./meta.php"; ?>


<!-- 스크립트 추가  -->

<!-- 안보이는데 왜 놔뒀노? -->

	<!-- header.php -->
	<?php include "./header.php"; ?>
	<!-- Main Contents -->
	<style>
	.article-wrap {
		margin-top: 6%

	}
	#alert-success {
		color : #0000FF

	}

	#alert-danger {
		color : #FF0000
	}

	/* .container-group {
		background-color: #65FFBA
	} */
	</style>
	<div class="container-outer">
		<main class="container-group" id="sub-container" role="main">
			<div class="inner">
				<div class="article-wrap">
					<header class="entry-header">
						<h1 class="entry-title">회원가입</h1>
						<div class="description"> 지금 바로 가입하세요!<br>
							<span class="top-left"></span>
							<span class="bottom-right"></span>
							<table>
								<form name=myForm method="post" action="insert.php">
								<tr>
									<td>* 아이디</td>
									<td><input type="text" name="userid" id="userid" class="check" placeholder="아이디" required />
										<td><div id="id_check">아이디를 입력해 주세요.</div></td></td>

											<!-- <input type=hidden id="chk_id2" name="chk_id2" value="0"> -->
											<!-- class="btn btn-bg-primary" -->
								</tr>
								<tr>
									<td>* 비밀번호</td>
									<td><input type="password" name="pass" id="pwd1" class="form-control" maxlength=20 required /></td>
								</tr>
								  <td>* 비밀번호 확인</td>
									<td><input type="password" name="pass2" id="pwd2" class="form-control" maxlength=20 required />
										<td><div class="alert alert-success" id="alert-success">비밀번호가 일치합니다.</div>
										<div class="alert alert-danger" id="alert-danger">비밀번호가 일치하지 않습니다.</div></td></td>
								<tr>
									<td>* 이름</td>
									<td><input type="text" name="name"></td>
								</tr>

								<tr>
									<td>* 휴대폰</td>
									<td>
										<select class="hp" name="hp1">
											<option value='010'>010</option>
											<option value='011'>011</option>
											<option value='016'>016</option>
											<option value='017'>017</option>
											<option value='018'>018</option>
											<option value='019'>019</option>
										</select>-
										<input type="text" class="hp" name="hp2" style="width:50px;, height:10px;">-
										<input type="text" class="hp" name="hp3" style="width:50px;, height:10px;">
									</td>
								</tr>

								<tr>
									<td bgcolor="#cccccc" > 이메일</td>
									<td>
										<input type="text" id="email1" name=email1 style="width:100px;">@
										<input type="text" id="email2" name=email2 style="width:100px;" disabled value="naver.com">
										<select name="selectEmail" id="selectEmail" style="width:100px;, margin-right:10px">
											<!-- <option value="1">직접입력</option> -->
											<option value="naver.com">naver.com</option>
											<option value="nate.com">nate.com</option>
											<option value="hanmail.net">hanmail.com</option>
											<option value="daum.net">daum.net</option>
											<option value="gmail.com">gmail.com</option>
											<option value="yahoo.co.kr">yahoo.co.kr</option>
										</select>

									</td>
								</tr>

								<tr>
									<td bgcolor="#cccccc" >주소</td>
									<td><input type="text" name="address"></td>
								</tr>

								<tr>
									<td></td>
									<td>
										<input type="submit" id="submit" name="joinbutton" value="가입" class="btn btn-bg-primary btn-search">
									</td>
								</tr>
								</form>
							</table>
						</div>
						<br><br><br>
					</header>
				</div>
			</div>
		</main>
	</div>
</body>
<?php include "footer.html"; ?>

<link rel='stylesheet' id='mp-local-style-css'  href='https://libweb.pknu.ac.kr/wp-content/plugins/mp-localize-pknu/templates/login-default/css/style.css?ver=2.1.0' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var pknu_vars = {"ajaxUrl":"https:\/\/libweb.pknu.ac.kr\/wp-admin\/admin-ajax.php","user_login":"","lang":"","id_label":"\uc544\uc774\ub514","name_label":"\uc774\ub984","dept_label":"\uc18c\uc18d","major_label":"\uc2e0\ubd84"};
/* ]]> */
</script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/themes/pknu-2016/assets/js/pknu.js?ver=1'></script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/plugins/mp-toolkit/assets/js/mp-toolkit.js?ver=1.1.0'></script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/themes/pknu-2016/assets/js/skip-link-focus-fix.js?ver=20160412'></script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/themes/pknu-2016/assets/js/owl.carousel.min.js?ver=2.0.0'></script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/themes/pknu-2016/assets/js/jquery.backstretch.min.js?ver=2.0.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var screenReaderText = {"home":"https:\/\/libweb.pknu.ac.kr","expand":"expand child menu","collapse":"collapse child menu"};
/* ]]> */
</script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/themes/pknu-2016/assets/js/functions.js?ver=20160412'></script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-includes/js/wp-embed.min.js?ver=4.8.6'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var icl_vars = {"current_language":"ko","icl_home":"http:\/\/libweb.pknu.ac.kr\/","ajax_url":"https:\/\/libweb.pknu.ac.kr\/wp-admin\/admin-ajax.php","url_type":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/plugins/sitepress-multilingual-cms/res/js/sitepress.js?ver=4.8.6'></script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=4.11.2.1'></script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/plugins/mp-localize-pknu/assets/js/jquery.jsonp.min.js?ver=2.0.4'></script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/plugins/mp-localize-pknu/assets/js/jquery.placeholder.min.js?ver=1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var login = {"ajaxUrl":"https:\/\/libweb.pknu.ac.kr\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/plugins/mp-localize-pknu/templates/login-default/js/scripts.js?ver=1'></script>
<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-90744105-1', 'auto');
		ga('require', 'displayfeatures');
		ga('send', 'pageview');
</script>

<!-- 아이디 중복 확인 스크립트 -->
<script type="text/javascript" src="//code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(e) {
	 $(".check").on("keyup", function(){
		 var self = $(this);
		 var userid;

		 if(self.attr("id") === "userid"){
			   userid =self.val();
		 }

		 $.post("id_check.php", { userid : userid },
		                function(data){
											 if(data){
												  self.parent().parent().find("div").html(data);

													self.parent().parent().find("div").css("color", "#F00");
											 }

		 }
	 );
});
});

</script>
<!-- 비밀번호 확인 스크립트 -->
<script type="text/javascript"></script>
<script>
$(function(){
	$("#alert-success").hide();
	$("#alert-danger").hide();
	$("input").keyup(function(){
		var pwd1=$("#pwd1").val();
		var pwd2=$("#pwd2").val();
		if(pwd1 != "" || pwd2 != ""){
			if(pwd1 == pwd2) {
				$("#alert-success").show();
				$("#alert-danger").hide();
				$("#submit").removeAttr("disabled"); // 버튼 비활성화 속성 제거
			}else{
				$("#alert-success").hide();
				$("#alert-danger").show();
				$("#submit").attr("disabled", "disabled"); // 버튼 비활성화
			}
		}
	});
});
</script>

<script type="text/javascript" src="//code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript"> // 이메일 입력 방식 선택
$("#selectEmail").change(function(){
	$("#selectEmail option:selected").each(function(){

		 if($(this).val()== '1') { //직접 입력일 경우
          $("#email1").val(''); // 값 초기화
				  $("#email2").attr("disabled", false); // 비활성화
		}else{ // 직접 입력이 아닐 경우
          $("#email2").val($(this).text()); // 선택값 입력
				  $("#email2").attr("disabled", true); // 비활성화
		}
	});
});
</script>
</html>
