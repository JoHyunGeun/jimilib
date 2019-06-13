<?php
@session_start();
?>

<header id="header" class="motion" role="banner">
	<!-- ir img-logo top-logo -->
	<a href="index.php" class="top-logo my-logo"><p class="my-logo font-blue">지</p><p class="my-logo">식이 </p><p class="my-logo font-blue">미</p><p class="my-logo">래다: </p></a>
	<ul class="eng user-menu">
        <?php
		if(!isset($_SESSION['username'])) {
    	?>
		<li class="login">
			<a href="login.php">로그인</a>
		</li>
		<li class="img-tiny">
			<a href="adcreate.php">회원가입</a>
		</li>
    	<?php
    	}
		else {
		$id=$_SESSION['username'];
	    $name=$_SESSION['userid'] ;
		echo "$id"."님";
    	?>
		<li class="login">
    		<a href="logout.php">로그아웃</a>
		</li>
    	<?php
    	}
    	?>
    	<li class="img-tiny">
            <a href="index.php" class="eng">Home</a>
        </li>
    </ul>

    <a href="#" id="all-menu" class="ir img-tiny">전체메뉴</a>
	<div class="top-search motion">
		<form role="search" method="post" action="search2.php">
    		<fieldset>
    			<legend>사이트내 검색</legend>
    			<input type="search" title="도서 검색" placeholder="도서 검색" value="" name="query" id="query" class="input-search">
    			<input type="submit" value="검색" class="img-tiny">
    		</fieldset>
		</form>
	</div>

	<nav class="primary-menu-wrap" role="navigation" aria-label="Primary Menu">
	    <h2 class="off-screen">주 메뉴</h2>
		<div class="inner">
			<div class="primary-menu-outer">
				<ul id="primary-menu" class="group">
					<!-- current-menu-item page_item page-item-70 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor  -->
                    <li id="menu-item-735" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-735">
                        <a href="">자료 검색</a>
                        <ul class="sub-menu">
		                    <li id="menu-item-193" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-70 current_page_item menu-item-193">
                                <a href="index.php">통합검색</a>
                            </li>
	                    </ul>
	                </li>

                    <!-- 로그인 되어있는 경우 -->
            		<?php
            		//if(!isset($_SESSION['username'])){}
            		//else{
            		?>

                    <li id="menu-item-739" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-739">
                        <a href="">내 정보 보기</a>
                        <ul  class="sub-menu">
            		        <li id="menu-item-152" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-152"><a href="myreserve.php">도서 예약하기</a></li>
            		        <li id="menu-item-647" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-647"><a href="myrental.php">나의 예약현황</a></li>
            		        <li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-153"><a href="mybook.php">나의 대여현황</a></li>
            		  	    <li id="menu-item-142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-142"><a href="myrecord.php">나의 대여기록</a></li>
            			    <li id="menu-item-249" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-249"><a href="searchrank.php">도서 대여 순위</a></li>
            		    </ul>
            		</li>

            		<?php
            		//}
            		?>

                    <!-- 관리자 로그인이 되어있는 경우 -->
            		<?php
            		//if(!isset($_SESSION['useradmin'])){}
            		//else{
            		?>

        		    <li id="menu-item-736" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-736">
                        <a href="">관리자 서비스</a>
        		        <ul  class="sub-menu">
        		            <li id="menu-item-229" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-229"><a href="searchadd.php">회원 관리</a></li>
        		            <li id="menu-item-332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-332"><a href="searchbook.php">대여 관리</a></li>
        		            <li id="menu-item-1089" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1089"><a href="searchbookad.php">도서 관리</a></li>
        		  	        <li id="menu-item-239" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-239"><a href="searchreserv.php">회원예약 현황</a></li>
        		    	    <li id="menu-item-240" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-240"><a href="searchrecord.php">대여기록</a></li>
        		        </ul>
        		    </li>

        		    <?php
        		   // }
        		    ?>

            		<li id="menu-item-1057" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1057"><a href="">대여점 안내</a>
            		    <ul class="sub-menu">
            			    <li id="menu-item-239" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-239"><a href="index2.php">대여점 소개</a></li>
            			    <li id="menu-item-139" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-139"><a href="index2.php">이용시간</a></li>
            			    <li id="menu-item-1144" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1144"><a href="index2.php">층별안내</a></li>
            		    </ul>
            		</li>
		        </ul>
		        <span class="line"></span>
			</div>
		</div>
	</nav>
</header>
