<?php
	include("db_connect.php");
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
				echo '<a href="user/user_logout.php" class="login">Logout</a>';
			} else {
				echo '<a href="user/user_login.php" class="login">Login</a>';
			}
			 ?>
		</li>
		<li><a href="#" class="my_page">My Page</a></li>
		<li><a href="#" class="cart"><img src="images/shopping_cart.png" alt=""></a></li>
	</ul>
	</nav>

</header>
