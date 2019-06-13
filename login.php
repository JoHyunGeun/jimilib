<!-- meta.php -->
<?php include "meta.php"; ?>

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
				<div class="contents no-side">
					<div class="contents-bar group">
						<div class="all-search">
							<form action="search2.php" autocomplete="off">
								<label for=""><i class="fa fa-book" aria-hidden="true"></i> 통합검색</label>
								<div class="search-box">
									<input type="text" id="query" name="query" title="검색어를 입력하세요" placeholder="검색어를 입력하세요">
									<button type="submit" title="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="off-screen">검색</span></button>
								</div>
							</form>
						</div>
					</div>
					<article id="post-623" class="post-623 page type-page status-publish hentry page_tag-41" role="article">
					<div class="article-wrap">
						<header class="entry-header">
							<h1 class="entry-title">로그인</h1>
							<div class="description">
								아직 저희 회원이 아니신가요? ...
								<a href="adcreate.php">회원가입하기</a>

								<span class="top-left"></span>
								<span class="bottom-right"></span>
							</div>
						</header>
						<div id="login_sync" class="login-sync">
							<form id="query" action="logsign.php" method="post" autocomplete="off">
							 	<input type="text" id="id" name="id" title="당신의 이름은 무엇인가요" placeholder="아이디" class="ui-form width-md autocomplete query-focus eds-search-init" value=""><br>
								<input type="password" id="pw" name="pw" title="당신의 비밀은 무엇인가요" placeholder="비밀번호" class="ui-form width-md autocomplete query-focus eds-search-init" value=""><br><br>
								<input type="submit" value="LOGIN" class="btn btn-bg-primary btn-search">
							</form>
						</div>
					</div>
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
