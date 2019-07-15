<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
	반응형웹
</title>
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/review.css">
<link rel="stylesheet" type="text/css" href="assets/css/default.css" />
<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
<script src="assets/js/modernizr.custom.js"></script>
</head>
	<body>

		<!-- 전체 웹 페이지 -->
		<div id="whole_wrapper">

			<?php
				include("header_review.php");
			 ?>

			<div id="page_cell_2nd">	&nbsp;	</div>
			<div id="page_cell_3rd">	&nbsp;	</div>

			<div id="con_wrapper">
				<div id="content">
					<div class="review_wrapper">

						<div class="review_event">
							<img src="images/review/review_ad.png" alt="" id="review_event_lap">
							<img src="images/review/review_ad_mobile.png" alt="" id="review_event_mobile">
						</div>

						<div class="review_empty">
							<img src="images/review/review_empty.png" alt="" >
						</div>

						<div class="best_review">
							<div class="best_tit">
								<img src="images/review/review_tit.png" alt="" id="review_tit_lap">
								<img src="images/review/review_tit_mobile.png" alt="" id="review_tit_mobile">
							</div>

							<div class="review_empty">
								<img src="images/review/review_empty.png" alt="" >
							</div>

							<div class="best_review_wrapper">

								<ul class="best_review_main">
									<li class="best_review_img">
										<a href=""><img src="images/review/review_img_1.png" onmouseover="this.src='images/review/review_img_1_onmouse.png';" onmouseout="this.src='images/review/review_img_1.png';"></a>
									</li><!-- .best_review_list -->
									<li class="best_review_info">
									<span class="review_num"><img src="images/review/review_num_1.png" alt=""></span>
									<span class="review_tit"><a href=""><h2>카렌듈라 오일 클렌져 순하고 좋아요</h2></a></span>
									<span class="review_id"><p>acke****</p></span>
									<span class="review_text">
										<p>
											저는 오일이 맞지 않아서 닥터트럽 클렌징 밀크를 사용<br />
											 하지만, 저희 언니에게는 너무 잘 맞는 제품이였어요.<br />
										</p>
									</span>
									</li><!-- .best_review_info -->
								</ul>

								<ul class="best_review_main">
									<li class="best_review_img">
										<a href=""><img src="images/review/review_img_2.png" onmouseover="this.src='images/review/review_img_2_onmouse.png';" onmouseout="this.src='images/review/review_img_2.png';"></a>
									</li><!-- .best_review_list -->
									<li class="best_review_info">
									<span class="review_num"><img src="images/review/review_num_1.png" alt=""></span>
									<span class="review_tit"><a href=""><h2>알파 화이트닝 앰플(12ml)</h2></a></span>
									<span class="review_id"><p>awha****</p></span>
									<span class="review_text">
										<p>
											처음엔 배송비 맞추려고 산 제품이였어요. 그때 미백에<br />
											관심이있기도 했고요. 하나 더 바른다는 생각으로…<br />
										</p>
									</span>
									</li><!-- .best_review_info -->
								</ul>

								<ul class="best_review_main">
									<li class="best_review_img">
										<a href=""><img src="images/review/review_img_3.png" onmouseover="this.src='images/review/review_img_3_onmouse.png';" onmouseout="this.src='images/review/review_img_3.png';"></a>
									</li><!-- .best_review_list -->
									<li class="best_review_info">
									<span class="review_num"><img src="images/review/review_num_1.png" alt=""></span>
									<span class="review_tit"><a href=""><h2>7개월 간의 기적</h2></a></span>
									<span class="review_id"><p>rlwjr***</p></span>
									<span class="review_text">
										<p>
											나이가 드니 피부에 신경을 안쓸수가 없더라구요. 그래<br />
											서 7개월에 걸쳐서 제 기초 화장품을 바꾸었답니다.<br />
										</p>
									</span>
									</li><!-- .best_review_info -->
								</ul>

						</div><!-- .best_review -->
					</div><!-- .review_wrapper -->
				</div><!-- #content -->
			</div><!-- #con_wrapper -->

			<?php
			include("footer.php");
			 ?>

		</div><!-- whole wrapper -->

	</body>
</html>
