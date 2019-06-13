<?php
session_start();
if(!isset($_SESSION['userid'])) {
    echo("
        <script>
          window.alert('로그인이 필요합니다.')
          location.href = 'login.php'
        </script>
        ");
    exit;
}
else {
?>

<!-- meta.php -->
    <?php include "meta.php"; ?>
    <body>
        <h1 class="off-screen">부경대학교 도서관</h1>
        <div id="skip-to-content">
        	<a href="#sub-container">본문으로 바로가기</a>
        	<a href="#primary-menu">메인 메뉴 바로가기</a>
        </div>

        <!-- Header -->
        <?php include "header.php"; ?>

        <!-- Main Contents -->
        <div class="container-outer">
            <main class="container group" id="sub-container" role="main">
	            <div class="inner">
		        <!-- Contents -->
			        <div class="article-wrap">
                        <article id="post-70" class="post-70 page type-page status-publish hentry page_tag-44" role="article">
            	        <header class="entry-header">
		                    <h1 class="entry-title">예약하기</h1>
                            <div id="sc-all">
                                <div class="search-box">
                                    <p class="headline">제목 검색</p>
                        			<form id="query" action="search2.php" method="post">
                        				<input type="text" id="query" name="query" title="검색어를 입력하세요." placeholder="도서 제목 입력" class="motion autocomplete query-focus eds-search-init">
                        				<button type="submit" title="검색" class="ir img-tiny motion">검색</button>
                        			</form>
                                </div>
                            </div>
                        </header>
	                    <div class="entry-content group">
				            <div class="box-m bg-gray align-center">
                                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                <p class="headline"> 검색 결과 </p>
                                <table width= "800" border="1" cellpadding="10">
                                    <tr align="center">
            					        <td bgcolor="#cccccc">일련번호</td>
                                        <td bgcolor="#cccccc">제목</td>
                                        <td bgcolor="#cccccc">저자</td>
                                        <td bgcolor="#cccccc">도서위치</td>
                                        <td bgcolor="#cccccc">예약하기</td>

                                    </tr>
                                    <?php
                                    require_once 'db_connect.php';
                                    $conn = new mysqli($hn, $un, $pw, $database);
                                    if($conn->connect_error) die ("connection failed:". $conn->connect_error );
                                    $result = $conn->query("SELECT * FROM film");
                                    while ($row = $result->fetch_assoc()) {
                                        echo
                                        "<tr>
                                            <td> $row[film_id] </td>
                                            <td> $row[title] </td>
                                            <td> $row[special_features] </td>
                                            <td> $row[rating] </td>
                                            <td>
                                                <form id='query' action='reservation.php' method='post'>
										            <input type='hidden' name='mode' id='mode' value=$row[title]>
                                                    <input type='submit' value='예약'>
                                                </form>
                                            </td>
                                        </tr>";
                                    }
                                    ?>
                                </table>
		                    </div>
                        </div>
                        <footer class="entry-footer">
			            </footer>
                        </article>
			        </div>
		        </div>
            </main>
        </div>
    </body>
<?php
include 'footer.html';
}
?>

<!-- //Footer -->

<link rel='stylesheet' id='jquery-ui-css'  href='https://libweb.pknu.ac.kr/wp-content/themes/pknu-2016/assets/css/jquery-ui.css?ver=1.0.0' type='text/css' media='all' />
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
<script type='text/javascript'>
/* <![CDATA[ */
var tulip_vars = {"ajaxUrl":"https:\/\/libweb.pknu.ac.kr\/wp-admin\/admin-ajax.php","page_url":"https:\/\/libweb.pknu.ac.kr\/resource\/hsearch\/","refworks_export_url":"http:\/\/www.refworks.com\/express\/ExpressImport.asp?vendor=Pusan%20National%20University&filter=RefWorks%20Tagged%20Format&encoding=65001","download_url":"https:\/\/libweb.pknu.ac.kr\/wp-content\/plugins\/usr\/share\/nginx\/html\/pknu\/wp-content\/themes\/pknu-2016\/inc\/class-file-download.php","report_question_message":"\uc2e0\uace0 \ud558\uc2dc\uaca0\uc2b5\ub2c8\uae4c?","report_complete_message":"\uc2e0\uace0\uac00 \uc644\ub8cc\ub418\uc5c8\uc2b5\ub2c8\ub2e4!","report_error_message":"\uc2e0\uace0 \uc624\ub958\uac00 \ubc1c\uc0dd\ud558\uc600\uc2b5\ub2c8\ub2e4. \uc9c1\uc811 \ubb38\uc758\ud558\uc138\uc694.","reservation_question_message":"\ub3c4\uc11c \uc608\uc57d\uc744 \ud558\uc2dc\uaca0\uc2b5\ub2c8\uae4c?","reservation_complete_message":"\ub3c4\uc11c \uc608\uc57d\uc774 \ub418\uc5c8\uc2b5\ub2c8\ub2e4.","reservation_error_message":"\ub3c4\uc11c \uc608\uc57d\uc774 \ub418\uc9c0 \uc54a\uc558\uc2b5\ub2c8\ub2e4. \uad00\ub9ac\uc790\uc5d0\uac8c \ubb38\uc758\ud574\uc8fc\uc138\uc694","delivery_question_message":"\uacf5\ud559\ub3c4\uc11c\uad00 \uc790\ub8cc\ubc30\ub2ec \uc2e0\uccad\uc744 \ud558\uc2dc\uaca0\uc2b5\ub2c8\uae4c?\n\u2022 \ub300\ucd9c\uac00\ub2a5\uc2dc\uac04 : \ub9e4\uc8fc \ud654, \ubaa9\uc694\uc77c \uc624\ud6c4 4\uc2dc \uc774\ud6c4\n\u2022 \ub300\ucd9c \ub300\uae30\uc77c : 3\uc77c(SMS, e-mail \ud1b5\ubcf4 \ub2f9\uc77c \uc81c\uc678)","delivery_add_question_message":"\ub538\ub9bc \uc790\ub8cc \uc2e0\uccad\uc744 \ud558\uc2dc\uaca0\uc2b5\ub2c8\uae4c?","delivery_complete_message":"\uacf5\ud559\ub3c4\uc11c\uad00 \uc790\ub8cc\ubc30\ub2ec \uc2e0\uccad\uc774 \ub418\uc5c8\uc2b5\ub2c8\ub2e4.","delivery_error_message":"\uacf5\ud559\ub3c4\uc11c\uad00 \uc790\ub8cc\ubc30\ub2ec \uc2e0\uccad\uc774 \ub418\uc9c0 \uc54a\uc558\uc2b5\ub2c8\ub2e4. \uad00\ub9ac\uc790\uc5d0\uac8c \ubb38\uc758\ud574\uc8fc\uc138\uc694","preservation_question_message":"\ubcf4\uc874\uc11c\uace0\uc790\ub8cc\ub97c \uc2e0\uccad \ud558\uc2dc\uaca0\uc2b5\ub2c8\uae4c?\n\ub300\ucd9c\uac00\ub2a5\uc2dc\uac04 : 10\uc2dc~\/14\uc2dc~\/16\uc2dc~\/18\uc2dc~\n\u203b \ucc38\uace0\ub3c4\uc11c\ub294 16\uc2dc~ 1\ud68c \ub300\ucd9c\uac00\ub2a5\n\ub300\ucd9c \ub300\uae30\uc77c : 3\uc77c(SMS, \uc774\uba54\uc77c \ud1b5\ubcf4 \ub2f9\uc77c \uc81c\uc678)","preservation_complete_message":"\ubcf4\uc874\uc11c\uace0\uc790\ub8cc\uac00 \uc2e0\uccad\ub418\uc5c8\uc2b5\ub2c8\ub2e4.","preservation_error_message1":"\ubcf4\uc874\uc11c\uace0 \uc2e0\uccad\uc774 \ub418\uc9c0 \uc54a\uc558\uc2b5\ub2c8\ub2e4. \uad00\ub9ac\uc790\uc5d0\uac8c \ubb38\uc758\ud574\uc8fc\uc138\uc694.","preservation_error_message2":"\ubcf4\uc874\uc11c\uace0 \uc2e0\uccad\uc774 \ub418\uc9c0 \uc54a\uc558\uc2b5\ub2c8\ub2e4. \uc911\ubcf5\ub41c \uc2e0\uccad\ub41c \uc2e0\uccad\uc785\ub2c8\ub2e4.","preservation_error_message5":"\ubcf4\uc874\uc11c\uace0 \uc2e0\uccad\uc774 \ub418\uc9c0 \uc54a\uc558\uc2b5\ub2c8\ub2e4. \ub2e4\ub978 \uc774\uc6a9\uc790\uac00 \uc2e0\uccad\uc911\uc785\ub2c8\ub2e4.","renew_question_message":"\uc5f0\uc7a5 \ud558\uc2dc\uaca0\uc2b5\ub2c8\uae4c?","renew_complete_message":"\uc5f0\uc7a5 \ub418\uc5c8\uc2b5\ub2c8\ub2e4.","renew_error_message":"\uc5f0\uc7a5 \ub418\uc9c0 \uc54a\uc558\uc2b5\ub2c8\ub2e4. \uc608\uc57d\ub41c \ub3c4\uc11c \uc774\uac70\ub098 \uc5f0\uc7a5 \ubd88\uac00 \uc0c1\ud0dc\uc785\ub2c8\ub2e4. \uad00\ub9ac\uc790\uc5d0\uac8c \ubb38\uc758\ud574\uc8fc\uc138\uc694","cancel_question_message":"\ucde8\uc18c \ud558\uc2dc\uaca0\uc2b5\ub2c8\uae4c?","cancel_complete_message":"\ucde8\uc18c \ub418\uc5c8\uc2b5\ub2c8\ub2e4.","cancel_error_message":"\ucde8\uc18c\uac00 \ub418\uc9c0 \uc54a\uc558\uc2b5\ub2c8\ub2e4. \uad00\ub9ac\uc790\uc5d0\uac8c \ubb38\uc758\ud574\uc8fc\uc138\uc694","mail_complete_message":"\uc131\uacf5\uc801\uc73c\ub85c \uba54\uc77c\uc744 \ubc1c\uc1a1\ud558\uc600\uc2b5\ub2c8\ub2e4.","mail_error_message":"\uc8c4\uc1a1\ud569\ub2c8\ub2e4. \uba54\uc77c \ubc1c\uc1a1\uc5d0 \ubb38\uc81c\uac00 \ubc1c\uc0dd\ud558\uc600\uc2b5\ub2c8\ub2e4.","reservation_go_url_message":"\uc18c\uc7a5\uc815\ubcf4\uc5d0\uc11c \uc608\uc57d \uc544\uc774\ucf58\uc744 \ud074\ub9ad\ud558\uc138\uc694.","error_admin_call_message":"\uad00\ub9ac\uc790\uc5d0\uac8c \ubb38\uc758\ud558\uc138\uc694!","notice_check_message":"\ud558\ub098 \uc774\uc0c1 \uc120\ud0dd\ud574\uc8fc\uc138\uc694!","cancel_status_message":"\ucde8\uc18c(\uc774\uc6a9\uc790)","no_search_message":"\uac80\uc0c9\ub41c \uacb0\uacfc\uac00 \uc5c6\uc2b5\ub2c8\ub2e4.","system_error_message":"\uc8c4\uc1a1\ud569\ub2c8\ub2e4. \uc2dc\uc2a4\ud15c \uc7a5\uc560\uac00 \ubc1c\uc0dd\ud558\uc600\uc2b5\ub2c8\ub2e4. \uc7a0\uc2dc \ud6c4 \uc811\uc18d\ud558\uc2dc\uac70\ub098, \ub3c4\uc11c\uad00\uc5d0 \ubb38\uc758\ud558\uc138\uc694.","system_error_message2":"\uc5d0\ub7ec\uac00 \ubc1c\uc0dd\ud558\uc600\uc2b5\ub2c8\ub2e4. \ub2e4\uc2dc \uc2e4\ud589\ud574 \uc8fc\uc2dc\uae30 \ubc14\ub78d\ub2c8\ub2e4.","tableofcontents":"\ubaa9\ucc28","author":"\uc800\uc790 \uc18c\uac1c","book_information":"\uad8c\ud638\uc815\ubcf4,\uc81c\ubcf8\uc815\ubcf4","book_reservation":"\ub3c4\uc11c \uc608\uc57d","all":"\uc804\uccb4","all_check":"\uc804\uccb4\uc120\ud0dd","not_all_check":"\uc804\uccb4\uc120\ud0dd \ud574\uc81c","check":"\uc120\ud0dd","count":"\uac74 \ud574\uc81c","is_login":"","alert_is_login":"\ub85c\uadf8\uc778\uc744 \ud558\uc2e0 \ud6c4 \uc774\uc6a9\ud558\uc2dc\uae30 \ubc14\ub78d\ub2c8\ub2e4.","alert_login_url":"https:\/\/libweb.pknu.ac.kr\/login\/?url=https%3A%2F%2Flibweb.pknu.ac.kr%2Fresource%2Fisearch%2F%3Fquery%3D","publication_year":"\ucd9c\ud310\ub144\ub3c4","publisher":"\ucd9c\ud310\uc0ac","acceptable_university":"\ud559\uc704\ub300\ud559","degree_year":"\ud559\uc704\ub144\ub3c4"};
/* ]]> */
</script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/plugins/tulip-api/templates/pknu/assets/js/scripts.js?ver=1'></script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/themes/pknu-2016/assets/js/jquery-ui.js?ver=1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var total_search = {"ajaxUrl":"https:\/\/libweb.pknu.ac.kr\/wp-admin\/admin-ajax.php","total_query":"","image":"https:\/\/libweb.pknu.ac.kr\/wp-content\/themes\/pknu-2016\/assets\/images\/default.jpg","beforelink":"%2Fresource%2Fisearch%2F%3Fquery%3D","more_url":["\/resource\/serials\/?mod=list&verb=detail&target=total&st=KWRD&multi_query=Y&type0=TOTAL&query0=&b0=and&type1=TOTAL&query1=&b1=and&type2=TOTAL&query2=&lmt%5B%5D=s&inc%5B%5D=TOTAL&lang=TOTAL&rf=&rt=&range=000000000021&record_per_page=10&msc=10000","\/resource\/thesis\/?mod=list&verb=detail&target=total&st=KWRD&multi_query=Y&type0=TOTAL&query0=&b0=and&type1=TOTAL&query1=&b1=and&type2=TOTAL&query2=&lmt%5B%5D=t&inc%5B%5D=TOTAL&lang=TOTAL&rf=&rt=&range=000000000021&record_per_page=10&msc=10000","\/resource\/multimedia\/?mod=list&verb=detail&target=total&st=KWRD&multi_query=Y&type0=TOTAL&query0=&b0=and&type1=TOTAL&query1=&b1=and&type2=TOTAL&query2=&lmt%5B%5D=b;p;v;x;u;c&inc%5B%5D=TOTAL&lang=TOTAL&rf=&rt=&range=000000000021&record_per_page=10&msc=10000","\/resource\/e-book\/?mod=list&verb=detail&target=total&st=KWRD&multi_query=Y&type0=TOTAL&query0=&b0=and&type1=TOTAL&query1=&b1=and&type2=TOTAL&query2=&lmt%5B%5D=eb&inc%5B%5D=TOTAL&lang=TOTAL&rf=&rt=&range=000000000021&record_per_page=10&msc=10000","\/resource\/kocw\/?keyword="],"link_url":["\/resource\/serials\/","\/resource\/thesis\/","\/resource\/multimedia\/","\/resource\/e-book\/","\/resource\/kocw\/"],"i18n":{"serials":"\uc5f0\uc18d\uac04\ud589\ubb3c","thesis":"\ud559\uc704\ub17c\ubb38","multimedia":"\uba40\ud2f0\ubbf8\ub514\uc5b4","viewmore":"\ub354\ubcf4\uae30","no_result":"\uac80\uc0c9\uacb0\uacfc\uac00 \uc5c6\uc2b5\ub2c8\ub2e4.","all":"\uc804\uccb4","error_message":"\uc5d0\ub7ec\uac00 \ubc1c\uc0dd\ud558\uc600\uc2b5\ub2c8\ub2e4. \ub2e4\uc2dc \uc2e4\ud589\ud574 \uc8fc\uc2dc\uae30 \ubc14\ub78d\ub2c8\ub2e4.","location":"\uc18c\uc7a5\ucc98","collection":"\uc18c\uc7a5\uc0ac\ud56d","claimsign":"\uccad\uad6c\uae30\ud638","subscribe":"\uad6c\ub3c5","recentlyreceived":"\ucd5c\uadfc\uc785\uc218\ud638","UnboundBoundIssues":"\uad8c\ud638\u00b7\uc81c\ubcf8\uc815\ubcf4 \ubcf4\uae30","Accession_no":"\ub4f1\ub85d\ubc88\ud638","Call_No":"\uccad\uad6c\uae30\ud638","Full_Record":"\ub3c4\uc11c\uc0c1\ud0dc","Due_Date":"\ubc18\ub0a9\uc608\uc815\uc77c","service":"\uc11c\ube44\uc2a4","Holdings_Information":"\uc18c\uc7a5\uc815\ubcf4"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://libweb.pknu.ac.kr/wp-content/themes/pknu-2016/assets/js/total_search.js?ver=1'></script>
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
