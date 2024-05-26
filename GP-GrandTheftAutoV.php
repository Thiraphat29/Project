<html>
<?php session_start(); ?>
<head>
<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" /> <!--- ไอคอนบนหน้าเว็บ ---> 
<title>Grand Theft Auto V · TZS Online</title>
	<?php
		require("Factor/BoStCSS121102.php");
	?>
</head>

<body class="body-style">
	<?php
		require("Factor/NavBar121102.php");
	?>
	
	<div class="SpaceStyle"></div>
	
	<div class="container"> <!---- แบ่งกึ่งกลางหน้า ---->
		<font-content>		
		<div class=row>
		<!--------------------------------------------- เนื้อหาฝั่งซ้าย ----------------------------------------------------->
			<div class="col-lg-3 ColContentSetting">
				<?php
					require("Factor/ContentLeft.php");
				?>
			</div>
	  	<!--------------------------------------------- เนื้อหาฝั่งขวา ----------------------------------------------------->
			<div class="col-lg-9 ColContentSetting"> <!--  -->
				<!---------------------- ลิงค์ --------------------->
				<nav aria-label="breadcrumb">
  					<ol class="breadcrumb SpaceStyle" style="background-color: #111111">
    					<li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li> 
    					<li class="breadcrumb-item"><a href="GameOnline.php">เกมออนไลน์</a></li>
						<li class="breadcrumb-item active" aria-current="page">Grand Theft Auto V</li>
  					</ol>
				</nav>
				<!---------------------- ข้อมูล --------------------->
				<div class="card CardBGSetting"> <!----- Start พื้นหลัง ----->
					<div class="card-body CardBodyBGSetting BorderRadius"><!----- Start ชิ้นส่วนพื้นหลัง ----->
						
						<div class="card CardContentBGSetting">
							<div class="card-body CardBodyContentBGSetting">
								<h3 style="margin: 0">Grand Theft Auto V</h3>
							</div>
						</div>
						
						<div class="YoutubeResponsive">
							<iframe width="1280" height="720" src="https://www.youtube.com/embed/UWzV0AFXukI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
											<img src="image/Game/GP-GrandTheftAutoV/Slide/slide1.png?v=<?php echo filemtime('image/Game/GP-GrandTheftAutoV/Slide/slide1.png'); ?>" class="d-block w-100" alt="ภาพที่ 1">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-GrandTheftAutoV/Slide/slide2.png?v=<?php echo filemtime('image/Game/GP-GrandTheftAutoV/Slide/slide2.png'); ?>" class="d-block w-100" alt="ภาพที่ 2">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-GrandTheftAutoV/Slide/slide3.png?v=<?php echo filemtime('image/Game/GP-GrandTheftAutoV/Slide/slide3.png'); ?>" class="d-block w-100" alt="ภาพที่ 3">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-GrandTheftAutoV/Slide/slide4.png?v=<?php echo filemtime('image/Game/GP-GrandTheftAutoV/Slide/slide4.png'); ?>" class="d-block w-100" alt="ภาพที่ 4">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-GrandTheftAutoV/Slide/slide5.png?v=<?php echo filemtime('image/Game/GP-GrandTheftAutoV/Slide/slide5.png'); ?>" class="d-block w-100" alt="ภาพที่ 5">
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
									<div class="col-lg-7" align="center" style="margin-bottom: 20px; margin-top: 20px;">
										<img src="image/Game/GP-GrandTheftAutoV/logo.png?v=<?php echo filemtime('image/Game/GP-BeamNGDrive/logo.png'); ?>" width="70%" height="auto" alt="BeamNGLogo">
									</div>
									
									<div class="col-lg-3">
										<h5>ค่ายเกม : Steam</h5>
										<p>
											<big>800</big><span> TZCoin</span>
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
											When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive
											</li>
										</p>
											
										<p>
											<li>
											When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other.
											</li>
										</p>		
										
										<p>
											<li>
											Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.
											</li>
										</p>
										
										<p>
											<li>
											The game offers players a huge range of PC-specific customization options, including over 25 separate configurable settings for texture quality, shaders, tessellation, anti-aliasing and more, as well as support and extensive customization for mouse and keyboard controls. Additional options include a population density slider to control car and pedestrian traffic, as well as dual and triple monitor support, 3D compatibility, and plug-and-play controller support.
											</li>
										</p>
										
										<p>
											<li>
											Grand Theft Auto V for PC also brings the debut of the Rockstar Editor, a powerful suite of creative tools to quickly and easily capture, edit and share game footage from within Grand Theft Auto V and Grand Theft Auto Online. The Rockstar Editor’s Director Mode allows players the ability to stage their own scenes using prominent story characters, pedestrians, and even animals to bring their vision to life. Along with advanced camera manipulation and editing effects including fast and slow motion, and an array of camera filters, players can add their own music using songs from GTAV radio stations, or dynamically control the intensity of the game’s score. Completed videos can be uploaded directly from the Rockstar Editor to YouTube and the Rockstar Games Social Club for easy sharing.
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
													<p style="margin:0;">ระบบปฏิบัติการ : Windows 10 64 Bit, Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1</p>
													<p style="margin:0;">หน่วยประมวลผล : Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz</p>
													<p style="margin:0;">หน่วยความจำ : แรม 4 GB</p>
													<p style="margin:0;">กราฟิกส์ : NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)</p>
													<p style="margin:0;">หน่วยบันทึกข้อมูล : พื้นที่ว่างที่พร้อมใช้งาน 72 GB</p>
											</li>
										</p>
										<p>
											<li>
												แนะนำ
													<p style="margin:0;">ระบบปฏิบัติการ : Windows 10 64 Bit, Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1</p>
													<p style="margin:0;">หน่วยประมวลผล : Intel Core i5 3470 @ 3.2GHz (4 CPUs) / AMD X8 FX-8350 @ 4GHz (8 CPUs)</p>
													<p style="margin:0;">หน่วยความจำ : แรม 8 GB</p>
													<p style="margin:0;">กราฟิกส์ : NVIDIA GTX 660 2GB / AMD HD 7870 2GB</p>
													<p style="margin:0;">หน่วยบันทึกข้อมูล : พื้นที่ว่างที่พร้อมใช้งาน 72 GB</p>
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