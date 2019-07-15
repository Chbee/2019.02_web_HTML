<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
	반응형웹_main_advertise
</title>
<link rel="stylesheet" href="assets/css/main.css?ver=2">
<link rel="stylesheet" href="assets/css/product.css?ver=1">
<link rel="stylesheet" type="text/css" href="assets/css/default.css" />
<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
<script src="assets/js/modernizr.custom.js"></script>
</head>
	<body>

		<!-- 전체 웹 페이지 -->
		<div id="whole_wrapper">

			<?php
				include("header.php");
			 ?>

			<div id="page_cell_2nd">	&nbsp;	</div>
			<div id="page_cell_3rd">	&nbsp;	</div>

			<!-- 모바일 하위메뉴 -->
			<div class="m_smallMenu">
				<ul class="ul_smallMenu">
					<li><a href="product.php">메인화면</a></li>
					<li><a href="product/function/product_menu.php">기능별</a></li>
					<li><a href="product/ingredient/product_ingredient.php">성분별</a></li>
					<li><a href="product/problem/product_ploblem.php">고민별</a></li>
				</ul>
			</div>

			<div id="con_wrapper">
				<div id="content">
					<div class="advertise_wrapper">

						<div class="advertise_tiles">

							<div class="advertise">
								<div class="advertise_image">
									<a href="#"><img src="images/product_ad1.png" alt="" /></a>
								</div>
							</div>

							<div class="advertise">
								<div class="advertise_image">
									<a href="#"><img src="images/product_ad2.png" alt="" /></a>
								</div>
							</div>

							<div class="advertise">
								<div class="advertise_image">
									<a href="#"><img src="images/product_ad3.png" alt="" /></a>
								</div>
							</div>

							<div class="advertise">
								<div class="advertise_image">
									<a href="#"><img src="images/product_ad4.png" alt="" /></a>
								</div>
							</div>

						</div><!-- advertise_tiles -->
					</div><!-- advertise_wrapper-->
				</div>
			</div>

			<?php
			include("footer.php");
			 ?>

		</div><!-- whole wrapper -->

	</body>
</html>
