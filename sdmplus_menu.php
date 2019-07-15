<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
	반응형웹
</title>
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="assets/css/sdmplus.css" />
<link rel="stylesheet" type="text/css" href="assets/css/default.css" />
<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
<script src="assets/js/modernizr.custom.js"></script>
</head>
	<body>

		<!-- 전체 웹 페이지 -->
		<div id="whole_wrapper">

			<?php
				include("header_sidmool.php");
			 ?>

			<div id="page_cell_2nd">	&nbsp;	</div>
			<div id="page_cell_3rd" class="sdmplus">	&nbsp;	</div>

			<div id="con_wrapper">
				<div id="content">
					<div class="sdmplus_wrapper">
						<div id="sdmplus_main" >
							<div class="title"><img src="images/sdmplus/tit.png" alt="INGREDIENTS GALLERY"></div>
							<div id="sdmplus_cel_1st">	&nbsp;	</div>
							<div class="line_box">
								<div class="line"><img src="images/sdmplus/tit_line.png" alt=""></div>
							</div>
							<div id="sdmplus_cel_2nd">	&nbsp;	</div>
							<div class="sdmplus_Con">
								<ul id="gallery_list">
									<!-- 성분 목록 -->
									<li>
										<div class="sdmplus_box">
											<div class="sdmplus_img">
												<a href="sdmplus/Ascorbyl.php">
													<img src="images/sdmplus/아스코빌_글루코사이드.png" alt="">
												</a>
											</div>
											<div class="sdmplus_info"><a href="sdmplus/Ascorbyl.php"><span>아스코빌 글루코사이드</span></a></div>
										</div>
									</li>

									<li>
										<div class="sdmplus_box">
											<div class="sdmplus_img">
												<a href="sdmplus/Alpha.php">
													<img src="images/sdmplus/알파_비사보롤.png" alt="">
												</a>
											</div>
											<div class="sdmplus_info"><a href="sdmplus/Alpha.php"><span>알파 비사보롤</span></a></div>
										</div>
									</li>

									<li>
										<div class="sdmplus_box">
											<div class="sdmplus_img">
												<a href="sdmplus/Aloe.php">
													<img src="images/sdmplus/알로에베라_추출물.png" alt="">
												</a>
											</div>
											<div class="sdmplus_info"><a href="sdmplus/Aloe.php"><span>알로에베라 추출물</span></a></div>
										</div>
									</li>

									<li>
										<div class="sdmplus_box">
											<div class="sdmplus_img">
												<a href="sdmplus/Asai.php">
													<img src="images/sdmplus/아사이베리_추출물.png" alt="">
												</a>
											</div>
											<div class="sdmplus_info"><a href="sdmplus/Asai.php"><span>아사이베리 추출물</span></a></div>
										</div>
									</li>

									<li>
										<div class="sdmplus_box">
											<div class="sdmplus_img">
												<a href="sdmplus/Titanum.php">
													<img src="images/sdmplus/티타늄디옥사이드.png" alt="">
												</a>
											</div>
											<div class="sdmplus_info"><a href="sdmplus/Titanum.php"><span>티타늄디옥사이드</span></a></div>
										</div>
									</li>

									<li>
										<div class="sdmplus_box">
											<div class="sdmplus_img">
												<a href="sdmplus/Argan.php">
													<img src="images/sdmplus/아르간_오일.png" alt="">
												</a>
											</div>
											<div class="sdmplus_info"><a href="sdmplus/Argan.php"><span>아르간 오일</span></a></div>
										</div>
									</li>

									<li>
										<div class="sdmplus_box">
											<div class="sdmplus_img">
												<a href="sdmplus/Blueberry.php">
													<img src="images/sdmplus/블루베리_추출물.png" alt="">
												</a>
											</div>
											<div class="sdmplus_info"><a href="sdmplus/Blueberry.php"><span>블루베리 추출물</span></a></div>
										</div>
									</li>

									<li>
										<div class="sdmplus_box">
											<div class="sdmplus_img">
												<a href="sdmplus/Byung_pul.php">
													<img src="images/sdmplus/병풀_추출물.png" alt="">
												</a>
											</div>
											<div class="sdmplus_info"><a href="sdmplus/Byung_pul.php"><span>병풀추출물</span></a></div>
										</div>
									</li>

									<li>
										<div class="sdmplus_box">
											<div class="sdmplus_img">
												<a href="sdmplus/Green_tee.php">
													<img src="images/sdmplus/녹차_추출물.png" alt="">
												</a>
											</div>
											<div class="sdmplus_info"><a href="sdmplus/Green_tee.php"><span>녹차 추출물</span></a></div>
										</div>
									</li>
								</ul><!-- #gallery_list -->
							</div><!-- sdmplus_Con -->
						</div><!-- #sdmplus_main -->
					</div><!-- .sdmplus_wrapper -->
				</div><!-- content -->
			</div><!-- #con_wrapper -->

			<?php
			include("footer.php");
			 ?>

		</div><!-- whole wrapper -->

	</body>
</html>
