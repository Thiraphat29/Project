<html>
<?php session_start(); ?>
<head>
	<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" />
	<!--- ไอคอนบนหน้าเว็บ --->
	<title>Player Unknow Battlegrounds · TZS Online</title>
	<?php
	require("Factor/BoStCSS121102.php");
	?>
</head>

<body class="body-style">
	<?php
	require("Factor/NavBar121102.php");
	?>

	<div class="SpaceStyle"></div>

	<div class="container">
		<!---- แบ่งกึ่งกลางหน้า ---->
		<font-content>
			<div class=row>
				<!--------------------------------------------- เนื้อหาฝั่งซ้าย ----------------------------------------------------->
				<div class="col-lg-3 ColContentSetting">
					<?php
					require("Factor/ContentLeft.php");
					?>
				</div>
				<!--------------------------------------------- เนื้อหาฝั่งขวา ----------------------------------------------------->
				<div class="col-lg-9 ColContentSetting">
					<!--  -->
					<!---------------------- ลิงค์ --------------------->
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb SpaceStyle" style="background-color: #111111">
							<li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
							<li class="breadcrumb-item"><a href="GameOnline.php">เกมออนไลน์</a></li>
							<li class="breadcrumb-item active" aria-current="page">PLAYERUNKNOWN'S BATTLEGROUNDS</li>
						</ol>
					</nav>
					<!---------------------- ข้อมูล --------------------->
					<div class="card CardBGSetting">
						<!----- Start พื้นหลัง ----->
						<div class="card-body CardBodyBGSetting BorderRadius">
							<!----- Start ชิ้นส่วนพื้นหลัง ----->

							<div class="card CardContentBGSetting">
								<div class="card-body CardBodyContentBGSetting">
									<h3 style="margin: 0">PLAYERUNKNOWN'S BATTLEGROUNDS</h3>
								</div>
							</div>

							<div class="YoutubeResponsive">
								<iframe width="875" height="492" src="https://www.youtube.com/embed/H6SKmGj_-f0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<!------------------- slide ------------------------>
							<div id="carouselExampleIndicators" class="carousel slide SpaceStyle" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
								</ol>
								<!----------------------- Slide Content -------------------------->
								<div class="carousel-inner">

									<div class="carousel-item active" data-interval="6000">
										<img src="image/Game/GP-PUBG/Slide/slide1.png?v=<?php echo filemtime('image/Game/GP-PUBG/Slide/slide1.png'); ?>" class="d-block w-100" alt="ภาพที่ 1">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-PUBG/Slide/slide2.png?v=<?php echo filemtime('image/Game/GP-PUBG/Slide/slide2.png'); ?>" class="d-block w-100" alt="ภาพที่ 2">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-PUBG/Slide/slide3.png?v=<?php echo filemtime('image/Game/GP-PUBG/Slide/slide3.png'); ?>" class="d-block w-100" alt="ภาพที่ 3">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-PUBG/Slide/slide4.png?v=<?php echo filemtime('image/Game/GP-PUBG/Slide/slide4.png'); ?>" class="d-block w-100" alt="ภาพที่ 4">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-PUBG/Slide/slide5.png?v=<?php echo filemtime('image/Game/GP-PUBG/Slide/slide5.png'); ?>" class="d-block w-100" alt="ภาพที่ 5">
									</div>

								</div>
								<!------------------- End of Slide Content ------------------------>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<!------------------- รายละเอียด ------------------------>

							<div class="card CardContentBGSetting">
								<div class="card-body CardBodyContentBGSetting">
									<div class="row">
										<div class="col-lg-7" align="center">
											<br>
											<img src="image/Game/GP-PUBG/logo.png?v=<?php echo filemtime('image/Game/GP-PUBG/logo.png'); ?>" width="70%" height="auto" alt="BeamNGLogo">
											<br>
										</div>

										<div class="col-lg-3">
											<h5>ค่ายเกม : Steam</h5>
											<p>
												<big>520</big><span> TZCoin</span>
											</p>
										</div>
										<div class="col-lg-2">
											<div align="right">
												<button type="button" class="btn btn-block btn-outline-success" style="height: 100%" data-toggle="modal" data-target="#AddToCartNotification">สั่งซื้อ</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!------------------- รายละเอียดและความต้องการระบบ ------------------------>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 ColContentSetting">
										<div class="card CardContentBGSetting">
											<div class="card-body CardBodyContentBGSetting">
												<h5>รายละเอียดเกม</h5>
												<p>
													<li>
														PLAYERUNKNOWN, หรือผู้ที่ใครๆรู้จักเขาในชื่อ Brendan Greene, คือผู้บุกเบิกของเกมแนว Battle royale และเป็นผู้ให้กำเนิด MOD โหมดการเล่น Battle royale ในเกม ARMA และ H1Z1: King of the Kill ที่ PUBG Corp., Greene ได้ทำงานร่วมกับทีมผู้พัฒนาที่มากด้วยประสบการณ์เพื่อสร้าง PUBG ให้เป็นประสบการณ์การเล่น Battle royale ระดับโลก
													</li>

											</div>
										</div>
									</div>
									<div class="col-lg-6 ColContentSetting">
										<div class="card CardContentBGSetting">
											<div class="card-body CardBodyContentBGSetting">
												<h5>ความต้องการของระบบ</h5>
												<p>
													<li>
														ขั้นต่ำ
														<p style="margin:0;">ระบบปฏิบัติการ : Windows 7 / 8 / 8.1 / 10</p>
														<p style="margin:0;">หน่วยประมวลผล : Intel® Core™ i5-4460</p>
														<p style="margin:0;">หน่วยความจำ : แรม 8 GB</p>
														<p style="margin:0;">กราฟิกส์ : NVIDIA® GeForce® GTX 960</p>
														<p style="margin:0;">หน่วยบันทึกข้อมูล : พื้นที่ว่างที่พร้อมใช้งาน 30 GB</p>
													</li>
												</p>
												<p>
													<li>
														แนะนำ
														<p style="margin:0;">ระบบปฏิบัติการ : Windows 7 / 8 / 8.1 / 10</p>
														<p style="margin:0;">หน่วยประมวลผล : Intel® Core™ i7-5770</p>
														<p style="margin:0;">หน่วยความจำ : แรม 16 GB</p>
														<p style="margin:0;">กราฟิกส์ : NVIDIA® GeForce® GTX 1060</p>
														<p style="margin:0;">หน่วยบันทึกข้อมูล : พื้นที่ว่างที่พร้อมใช้งาน 30 GB</p>
													</li>
												</p>
											</div>
										</div>
									</div>
								</div>
								<!------------------- ------ ------------------------>
							</div>
						</div>
					</div>
				</div>

				<?php
					require("Factor/ScrollTop121102.php");
				?>
				
				<?php
					require("Factor/AddToCartNoti121102.php");
				?>
			</div>
		</font-content>
	</div>

	<?php
	require("Factor/Footer121102.php");
	?>
</body>

</html>