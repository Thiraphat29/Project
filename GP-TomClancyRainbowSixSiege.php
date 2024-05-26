<html>
<?php session_start(); ?>
<head>
	<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" />
	<!--- ไอคอนบนหน้าเว็บ --->
	<title>Rainbow Six Siege · TZS Online</title>
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
							<li class="breadcrumb-item active" aria-current="page">Tom Clancy's Rainbow Six® Siege</li>
						</ol>
					</nav>
					<!---------------------- ข้อมูล --------------------->
					<div class="card CardBGSetting">
						<!----- Start พื้นหลัง ----->
						<div class="card-body CardBodyBGSetting BorderRadius">
							<!----- Start ชิ้นส่วนพื้นหลัง ----->

							<div class="card CardContentBGSetting">
								<div class="card-body CardBodyContentBGSetting">
									<h3 style="margin: 0">Tom Clancy's Rainbow Six® Siege</h3>
								</div>
							</div>

							<div class="YoutubeResponsive">
								<iframe width="875" height="492" src="https://www.youtube.com/embed/y94HzpWgXus" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
										<img src="image/Game/GP-Rainbow6/Slide/slide1.png?v=<?php echo filemtime('image/Game/GP-Rainbow6/Slide/slide1.png'); ?>" class="d-block w-100" alt="ภาพที่ 1">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-Rainbow6/Slide/slide2.png?v=<?php echo filemtime('image/Game/GP-Rainbow6/Slide/slide2.png'); ?>" class="d-block w-100" alt="ภาพที่ 2">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-Rainbow6/Slide/slide3.png?v=<?php echo filemtime('image/Game/GP-Rainbow6/Slide/slide3.png'); ?>" class="d-block w-100" alt="ภาพที่ 3">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-Rainbow6/Slide/slide4.png?v=<?php echo filemtime('image/Game/GP-Rainbow6/Slide/slide4.png'); ?>" class="d-block w-100" alt="ภาพที่ 4">
									</div>

									<div class="carousel-item" data-interval="6000">
										<img src="image/Game/GP-Rainbow6/Slide/slide5.png?v=<?php echo filemtime('image/Game/GP-Rainbow6/Slide/slide5.png'); ?>" class="d-block w-100" alt="ภาพที่ 5">
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
											<img src="image/Game/GP-Rainbow6/logo.png?v=<?php echo filemtime('image/Game/GP-Rainbow6/logo.png'); ?>" width="70%" height="auto" alt="Rainbow6Logo">
											<br>
										</div>

										<div class="col-lg-3">
											<h5>ค่ายเกม : Steam</h5>
											<p>
												<span>ราคาปกติ </span><s>600</s><span> TZCoin</span>
												<br><span>ส่วนลด </span><big>45</big><span> TZCoin</span></br>
												<span>เหลือเพียง </span><big class="TotalPriceStyle">555</big><span> TZCoin</span>
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
														Master the art of destruction and gadgetry in Tom Clancy’s Rainbow Six Siege. Face intense close quarters combat, high lethality, tactical decision making, team play and explosive action within every moment. Experience a new era of fierce firefights and expert strategy born from the rich legacy of past Tom Clancy's Rainbow Six games.
													</li>
												</p>

												<p>
													<li>
														Engage in a brand-new style of assault using an unrivaled level of destruction and gadgetry.
														On defense, coordinate with your team to transform your environments into strongholds. Trap, fortify and create defensive systems to prevent being breached by the enemy.
														On attack, lead your team through narrow corridors, barricaded doorways and reinforced walls. Combine tactical maps, observation drones, rappelling and more to plan, attack and defuse every situation. </li>
												</p>

												<p>
													<li>
														Choose from dozens of highly trained, Special Forces operators from around the world. Deploy the latest technology to track enemy movement. Shatter walls to open new lines of fire. Breach ceilings and floors to create new access points. Employ every weapon and gadget from your deadly arsenal to locate, manipulate and destroy your enemies and the environment around them.
													</li>
												</p>

												<p>
													<li>
														Experience new strategies and tactics as Rainbow Six Siege evolves over time. Change the rules of Siege with every update that includes new operators, weapons, gadgets and maps. Evolve alongside the ever-changing landscape with your friends and become the most experienced and dangerous operators out there.
													</li>
												</p>
												<p>
													<li>
														Compete against others from around the world in ranked match play. Grab your best squad and join the competitive community in weekly tournaments or watch the best professional teams battle it out in the Rainbow Six Siege Pro League.
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
														<p style="margin:0;">หน่วยประมวลผล : Intel Core i3 560 @ 3.3 GHz or AMD Phenom II X4 945 @ 3.0 GHz</p>
														<p style="margin:0;">หน่วยความจำ : แรม 4 GB</p>
														<p style="margin:0;">กราฟิกส์ : NVIDIA® GeForce® GTX 550</p>
														<p style="margin:0;">หน่วยบันทึกข้อมูล : พื้นที่ว่างที่พร้อมใช้งาน 70 GB</p>
													</li>
												</p>
												<p>
													<li>
														แนะนำ
														<p style="margin:0;">ระบบปฏิบัติการ : Windows 7 / 8 / 8.1 / 10</p>
														<p style="margin:0;">หน่วยประมวลผล : Intel® Core™ i7-3770</p>
														<p style="margin:0;">หน่วยความจำ : แรม 8 GB</p>
														<p style="margin:0;">กราฟิกส์ : NVIDIA® GeForce® GTX 750ti</p>
														<p style="margin:0;">หน่วยบันทึกข้อมูล : พื้นที่ว่างที่พร้อมใช้งาน 80 GB</p>
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