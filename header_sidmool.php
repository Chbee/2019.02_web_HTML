<?php
	session_start();

	$db = new mysqli(
          'localhost',
          'root',
          'would1996',
          'sidmool');
 ?>

<header><!-- 로고 및 서브메뉴 -->

	<div class="logo_wrapper">
		<a href="#"><img src="images/logo.png" alt="" class="logo"></a>
	</div>

	<nav id="top_nav"><!-- 서브메뉴 -->
	<ul>
		<li>
			<?php
			if( isset($_SESSION['user_id_session']) ) {
				echo '<a href="user_logout.php" class="login">Logout</a>';
			} else {
				echo '<a href="user_login.php" class="login">Login</a>';
			}
			 ?>
		</li>
		<li><a href="#" class="my_page">My Page</a></li>
		<li><a href="#" class="cart"><img src="images/shopping_cart.png" alt=""></a></li>
	</ul>
	</nav>

</header>

<div id="page_cell_1st">	1st	</div>

<div id="menu_wrapper">
	<div id="menu"><!-- 메인메뉴 -->
	<ul>
		<li class="main_li">
			<div class="main" id="view"><a href="product.php" >PRODUCT</a></div>
			<!-- product의 서브메뉴 -->
			<div class="sub">
			<ul class="sub_menu">
				<li><a href="product/function/product_menu.php">기능별<a></li>
				<li><a href="product/ingredient/product_ingredient.php">성분라인별<a></li>
				<li><a href="product/problem/product_problem.php">고민별<a></li>
			</ul>
			</div>
		</li>

		<li class="main_li">
			<div class="main" id="not_view"><a href="sdmplus_menu.php">시드물플러스</a></div>
			<div class="sub">
			<ul class="sub_menu">
				<li><a href=""><a></li>
			</ul>
			</div>
		</li>

		<li class="main_li">
			<div class="main" id="not_view"><a href="review_menu.php">REVIEW</a></div>
			<!-- review의 서브메뉴 -->
			<div class="sub">
			<ul class="sub_menu">
				<li><a href="">제품후기<a></li>
				<li><a href="">포토후기<a></li>
			</ul>
			</div>
		</li>

		<li class="main_li">
			<div class="main" id="not_view"><a href="#">커뮤니티</a></div>
			<!-- 커뮤니티의 서브메뉴 -->
			<div class="sub">
			<ul class="sub_menu">
				<li><a href="">1:1문의<a></li>
				<li><a href="review_summary/summary_board.php">자유게시판<a></li>
			</ul>
			</div>
		</li>

		<li class="main_li">
			<div class="main" id="not_view"><a href="#">배송정보확인</a></div>
			<!-- review의 서브메뉴 -->
			<div class="sub">
			<ul class="sub_menu">
				<li><a href="">CJ대한통운<a></li>
				<li><a href="">우체국택배<a></li>
			</ul>
			</div>
		</li>

		<li class="main_li">
			<div class="main" id="not_view"><a href="notice/notice_board.php">시드물통신</a></div>
		</li>
	</ul>
	</div><!-- main menu -->

	<!-- 모바일 메뉴 -->
	<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
		<h3>Menu</h3>
		<a href="product.php">PRODUCT</a>
		<a href="sdmplus_menu.php">시드물플러스</a>
		<a href="review_menu.php">REVIEW</a>
		<a href="review_summary/summary_board.php">커뮤니티</a>
		<a href="#">배송정보확인</a>
		<a href="notice/notice_board.php">시드물통신</a>
	</nav>

	<div class="container">
		<div class="main">
			<section>
			<!-- Class "cbp-spmenu-open" gets applied to menu -->
			<button id="showRight"></button>
			</section>
		</div>
	</div>

	<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
	<script src="assets/js/classie.js"></script>
	<script>
		var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
		body = document.body;

		showRight.onclick = function() {
			classie.toggle( this, 'active' );
			classie.toggle( menuRight, 'cbp-spmenu-open' );
			disableOther( 'showRight' );
		};

		function disableOther( button ) {
			if( button !== 'showRight' ) {
				classie.toggle( showRight, 'disabled' );
			}
		}
	</script>

</ul>
</div><!-- menu wrapper -->
