<html>

<head>
	
</head>

<body>
	<font-nav>
		
		<!------------ NavBar ส่วนบน ------------>
		<nav class="navbar justify-content-between" id="NavBar1Setting">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="image/Header/logo.png" height="55" alt="TZS Logo">
				</a>
				<form class="form-inline" style="margin-top: auto; margin-bottom: auto;">
					<div class="Search-Bar-Settings" align="center">
						<img src="image/Header/search.png" class="Search-Image-Settings" height="30" alt="TZS Logo">
						<input class="form-control mr-sm-2" type="search" placeholder="ค้นหารายการสินค้า" aria-label="Search" style="border: 0">
					</div>
			</div>
			</form>
			</div>
		</nav>
		<!------------ NavBar ส่วนล่าง ------------>
		<nav class="navbar  navbar-expand-lg navbar-dark sticky-top" id="NavBar2Setting">

			<div class="container">

				<a class="navbar-brand" href="index.php">หน้าหลัก</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto" style="width: auto">

						<!------------------ เกม Button ------------------>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								สินค้าแนะนำ
							</a>
							<menu-font-size>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="GameOnline.php">Snack box ชุดที่1</a>
									<!--<div class="dropdown-divider"></div>-->
									<a class="dropdown-item" href="GameOffline.php">Snack box ชุดที่2</a>
									
									<a class="dropdown-item" href="GameOffline.php">Snack box ชุดที่3</a>
									<a class="dropdown-item" href="AllGame.php">รายการสินค้าทั้งหมด</a>
								</div>
							</menu-font-size>
						</li>
						<!------------------ โปรโมชั่น Button ------------------>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								โปรโมชั่น
							</a>
							<menu-font-size>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="Special Discount.php">ส่วนลด</a>
									<!--<div class="dropdown-divider"></div>-->
									<a class="dropdown-item" href="Recommended Game.php">รายการแนะนำ</a>
								</div>
							</menu-font-size>
						</li>
						<!------------------ เกี่ยวกับ Button ------------------>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								เกี่ยวกับ
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="About.php">ข้อมูลเว็บไซต์</a>
							</div>
						</li>
						<!------------------ ช่วยเหลือ Button ------------------>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								ช่วยเหลือ
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="Contact.php">ติดต่อ/สอบถาม</a>
								<!--<div class="dropdown-divider"></div>-->
								<a class="dropdown-item" href="HowToUse.php">วิธีใช้งานเว็บไซต์</a>
							</div>
						</li>
						<!---------------- End Of Button ---------------->
					</ul>

					<div>
						<form class="form-inline my-2 my-lg-0">
							<?php if(isset($_SESSION["c_Uname"])) : ?>
							<div style="color: #FFFFFF"><?php echo $_SESSION["c_Uname"]; ?></div>
							<?php else: ?>
							<div style="color: #FFFFFF">กรุณาเข้าสู่ระบบ</div>
							<?php endif; ?>

							<a href="Shopping-Cart.php">

								<img src="image/Header/shopping.png" class="Search-Image-Settings" height="40" alt="Shopping Cart">
							</a>
							<span style="margin-left: 10px; color:#585858; font-size: 30px">|</span>

							<span style="margin-left: 10px; color: #FFFFFF">0</span>
							<span style="margin-left: 5px; color: #FFFFFF">TZCoin</span>

							<a href="TZS-Top-Up.php">
								<button type="button" class="btn btn-outline-success my-2 my-sm-0" style="margin-left: 10px">
									เติมเงิน
								</button>
							</a>
						</form>
					</div>
				</div>
			</div>
		</nav>
	</font-nav>
</body>

</html>
