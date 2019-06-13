<!-- meta.php -->
<?php include "meta.php"; ?>

<!-- 안보이는데 왜 놔뒀노? -->
<body>
	<h1 class="off-screen">부경대학교 도서관</h1>
	<div id="skip-to-content">
		<a href="#sub-container">본문으로 바로가기</a>
		<a href="#primary-menu">메인 메뉴 바로가기</a>
	</div>
	<!-- header.php -->
	<?php include "header.php"; ?>
	<!-- Main Contents -->
	<div class="container-outer">
		<main class="container group" id="sub-container" role="main">
			<div class="inner">
				<div class="article-wrap">
					<header class="entry-header">
						<h1 class="entry-title">회원가입</h1>
						<div class="description"> 지금 바로 가입하세요!<br>
							<span class="top-left"></span>
							<span class="bottom-right"></span>
							<table>
								<form method="post" action="insert.php" autocomplete="off">
								<tr>
									<td>* 아이디</td>
									<td><input type="text" name="id"></a></td>
								</tr>
								<tr>
									<td>* 비밀번호</td>
									<td><input type="password" name="pass"></td>
								</tr>
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
										<input type="text" class="hp" name="hp2">-
										<input type="text" class="hp" name="hp3">
									</td>
								</tr>

								<tr>
									<td bgcolor="#cccccc" > 이메일</td>
									<td>
										<input type="text" id="email1" name="email1">@
										<input type="text" name="email2">
									</td>
								</tr>

								<tr>
									<td bgcolor="#cccccc" >주소</td>
									<td><input type="text" name="address"></td>
								</tr>

								<tr>
									<td></td>
									<td>
										<input type="submit" value="가입" class="btn btn-bg-primary btn-search">
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
</body>
</html>
