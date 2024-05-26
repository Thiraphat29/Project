<html>
<?php session_start(); ?>
<head>
	<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" />
	<!--- ไอคอนบนหน้าเว็บ --->
	<title>Hunt: Showdown · TZS Online</title>
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
							<li class="breadcrumb-item active" aria-current="page">Hunt: Showdown</li>
						</ol>
					</nav>
					<!---------------------- ข้อมูล --------------------->
					<div class="card CardBGSetting">
						<!----- Start พื้นหลัง ----->
						<div class="card-body CardBodyBGSetting BorderRadius">
							<!----- Start ชิ้นส่วนพื้นหลัง ----->

							<div class="card CardContentBGSetting">
								<div class="card-body CardBodyContentBGSetting">
									<h3 style="margin: 0">Hunt: Showdown</h3>
								</div>
							</div>

							<div class="YoutubeResponsive">
								<iframe width="875" height="492" src="https://www.youtube.com/embed/-MlbAAaqNdA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
										<img src="image/Game/GP-HuntShowdown/Slide/slide1.png?v=<?php echo filemtime('image/Game/GP-HuntShowdown/Slide/slide1.png'); ?>" class="d-block w-100" alt="ภาพที่ 1">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-HuntShowdown/Slide/slide2.png?v=<?php echo filemtime('image/Game/GP-HuntShowdown/Slide/slide2.png'); ?>" class="d-block w-100" alt="ภาพที่ 2">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-HuntShowdown/Slide/slide3.png?v=<?php echo filemtime('image/Game/GP-HuntShowdown/Slide/slide3.png'); ?>" class="d-block w-100" alt="ภาพที่ 3">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-HuntShowdown/Slide/slide4.png?v=<?php echo filemtime('image/Game/GP-HuntShowdown/Slide/slide4.png'); ?>" class="d-block w-100" alt="ภาพที่ 4">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-HuntShowdown/Slide/slide5.png?v=<?php echo filemtime('image/Game/GP-HuntShowdown/Slide/slide5.png'); ?>" class="d-block w-100" alt="ภาพที่ 5">
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
											<img src="image/Game/GP-HuntShowdown/logo.png?v=<?php echo filemtime('image/Game/GP-HuntShowdown/logo.png'); ?>" width="70%" height="auto" alt="BeamNGLogo">
											<br>
										</div>

										<div class="col-lg-3">
											<h5>ค่ายเกม : Steam</h5>
											<p>
												<big>576</big><span> TZCoin</span>
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
														Savage, nightmarish monsters roam the Louisiana swamps, and you are part of a group of rugged bounty hunters bound to rid the world of their ghastly presence. Banish these creatures from our world, and you will be paid generously—and given the chance to buy more gruesome and powerful weapons. Fail, and death will strip you of both character and gear. Your experience, however, remains in your pool of hunters—called your Bloodline—always.

													</li>
												</p>

												<p>
													<li>
														Hunt’s competitive, match-based gameplay mixes PvP and PvE elements to create a uniquely tense experience where your life, your character, and your gear are always on the line. At the beginning of each Bounty Hunt match, up to 12 players set out to track their monstrous targets. Depending on which mode and team options you’ve chosen, that 12 will include a combination of solo players and teams of two or three. Once they’ve found and defeated one of these they will receive a bounty—and instantly become a target for every other Hunter left on the map. If you don’t watch your back, you’ll find a knife in it, and your last memory will be of someone else walking away with your prize. The higher the risk, the higher the reward–but a single mistake could cost you everything.

													</li>
												</p>

												<p>
													<li>
														Hunt's Quick Play game mode offers a shorter match, during which up to ten individual players race to scavenge gear and find and close four rifts as they compete for a diminishing pool of bounty. First Hunter to the final rift absorbs its energy, but must survive the final count down to complete the mission—while the other Hunters attempt to take them out and take the prize for themselves. When the timer runs out the winner keeps their Hunter, while the rest perish.
													</li>
												</p>


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
														<p style="margin:0;">หน่วยประมวลผล : Intel i5-4590 @ 3.3GHz (4th Generation) or AMD Ryzen 3 1200</p>
														<p style="margin:0;">หน่วยความจำ : แรม 8 GB</p>
														<p style="margin:0;">กราฟิกส์ : NVIDIA GeForce GTX 660 TI or AMD Radeon R7 370</p>
														<p style="margin:0;">หน่วยบันทึกข้อมูล : พื้นที่ว่างที่พร้อมใช้งาน 260 GB</p>
													</li>
												</p>
												<p>
													<li>
														แนะนำ
														<p style="margin:0;">ระบบปฏิบัติการ : Windows 7 / 8 / 8.1 / 10</p>
														<p style="margin:0;">หน่วยประมวลผล : Intel i5-6600 @ 3.3Ghz (6th Generation) or AMD Ryzen 5 1400</p>
														<p style="margin:0;">หน่วยความจำ : แรม 16 GB</p>
														<p style="margin:0;">กราฟิกส์ : NVIDIA GeForce GTX 970 4 GB or AMD Radeon R9 390X</p>
														<p style="margin:0;">หน่วยบันทึกข้อมูล : พื้นที่ว่างที่พร้อมใช้งาน 26 GB</p>
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