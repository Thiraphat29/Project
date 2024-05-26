<html>
<?php session_start(); ?>
<head>
	<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" />
	<!--- ไอคอนบนหน้าเว็บ --->
	<title>Stardew Valley · TZS Online</title>
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
							<li class="breadcrumb-item active" aria-current="page">Stardew Valley</li>
						</ol>
					</nav>
					<!---------------------- ข้อมูล --------------------->
					<div class="card CardBGSetting">
						<!----- Start พื้นหลัง ----->
						<div class="card-body CardBodyBGSetting BorderRadius">
							<!----- Start ชิ้นส่วนพื้นหลัง ----->

							<div class="card CardContentBGSetting">
								<div class="card-body CardBodyContentBGSetting">
									<h3 style="margin: 0">Stardew Valley</h3>
								</div>
							</div>

							<div class="YoutubeResponsive">
								<iframe width="875" height="492" src="https://www.youtube.com/embed/8A7A1X1TVNc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
										<img src="image/Game/GP-StardewValley/Slide/slide1.png?v=<?php echo filemtime('image/Game/GP-StardewValley/Slide/slide1.png'); ?>" class="d-block w-100" alt="ภาพที่ 1">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-StardewValley/Slide/slide2.png?v=<?php echo filemtime('image/Game/GP-StardewValley/Slide/slide2.png'); ?>" class="d-block w-100" alt="ภาพที่ 2">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-StardewValley/Slide/slide3.png?v=<?php echo filemtime('image/Game/GP-StardewValley/Slide/slide3.png'); ?>" class="d-block w-100" alt="ภาพที่ 3">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-StardewValley/Slide/slide4.png?v=<?php echo filemtime('image/Game/GP-StardewValley/Slide/slide4.png'); ?>" class="d-block w-100" alt="ภาพที่ 4">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-StardewValley/Slide/slide5.png?v=<?php echo filemtime('image/Game/GP-StardewValley/Slide/slide5.png'); ?>" class="d-block w-100" alt="ภาพที่ 5">
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
											<img src="image/Game/GP-StardewValley/logo.png?v=<?php echo filemtime('image/Game/GP-StardewValley/logo.png'); ?>" width="70%" height="auto" alt="BeamNGLogo">
											<br>
										</div>

										<div class="col-lg-3">
											<h5>ค่ายเกม : Steam</h5>
											<p>
												<span>ราคาปกติ </span><s>315</s><span> TZCoin</span>
												<br><span>ส่วนลด </span><big>50</big><span> TZCoin</span></br>
												<span>เหลือเพียง </span><big class="TotalPriceStyle">265</big><span> TZCoin</span>
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
														Stardew Valley is an open-ended country-life RPG!

													<li>

														You've inherited your grandfather's old farm plot in Stardew Valley. Armed with hand-me-down tools and a few coins, you set out to begin your new life. Can you learn to live off the land and turn these overgrown fields into a thriving home? It won't be easy. Ever since Joja Corporation came to town, the old ways of life have all but disappeared. The community center, once the town's most vibrant hub of activity, now lies in shambles. But the valley seems full of opportunity. With a little dedication, you might just be the one to restore Stardew Valley to greatness! </li>
												</p>

												<p>
													<li>
														Features </li>
												</p>

												<p>
													<li>
														Turn your overgrown field into a lively farm! Raise animals, grow crops, start an orchard, craft useful machines, and more! You'll have plenty of space to create the farm of your dreams.
													</li>
												</p>

												<p>
													<li>
														4 Player Farming! Invite 1-3 players to join you in the valley online! Players can work together to build a thriving farm, share resources, and improve the local community. As more hands are better than one, players have the option to scale profit margin on produce sold for a more challenging experience.
													</li>
												</p>
												<p>
													<li>
														Improve your skills over time. As you make your way from a struggling greenhorn to a master farmer, you'll level up in 5 different areas: farming, mining, combat, fishing, and foraging. As you progress, you'll learn new cooking and crafting recipes, unlock new areas to explore, and customize your skills by choosing from a variety of professions.
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
														แนะนำ
														<p style="margin:0;">ระบบปฏิบัติการ : Windows 7 / 8 / 8.1 / 10</p>
														<p style="margin:0;">หน่วยประมวลผล : 2 Ghz</p>
														<p style="margin:0;">หน่วยความจำ : แรม 2 GB</p>
														<p style="margin:0;">กราฟิกส์ : : 256 mb video memory, shader model 3.0+</p>
														<p style="margin:0;">หน่วยบันทึกข้อมูล : พื้นที่ว่างที่พร้อมใช้งาน 500MB</p>
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