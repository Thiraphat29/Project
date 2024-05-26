<html>
<?php session_start(); ?>
<head>
<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" /> <!--- ไอคอนบนหน้าเว็บ ---> 
<title>Forza Horizon 4 · TZS Online</title>
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
						<li class="breadcrumb-item active" aria-current="page">Forza Horizon 4</li>
  					</ol>
				</nav>
				<!---------------------- ข้อมูล --------------------->
				<div class="card CardBGSetting"> <!----- Start พื้นหลัง ----->
					<div class="card-body CardBodyBGSetting BorderRadius"><!----- Start ชิ้นส่วนพื้นหลัง ----->
						
						<div class="card CardContentBGSetting">
							<div class="card-body CardBodyContentBGSetting">
								<h3 style="margin: 0">Forza Horizon 4</h3>
							</div>
						</div>
						
						<div class="YoutubeResponsive">
							<iframe width="1280" height="720" src="https://www.youtube.com/embed/5xy4n73WOMM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
											<img src="image/Game/GP-ForzaHorizon4/Slide/slide1.png?v=<?php echo filemtime('image/Game/GP-ForzaHorizon4/Slide/slide1.png'); ?>" class="d-block w-100" alt="ภาพที่ 1">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-ForzaHorizon4/Slide/slide2.png?v=<?php echo filemtime('image/Game/GP-ForzaHorizon4/Slide/slide2.png'); ?>" class="d-block w-100" alt="ภาพที่ 2">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-ForzaHorizon4/Slide/slide3.png?v=<?php echo filemtime('image/Game/GP-ForzaHorizon4/Slide/slide3.png'); ?>" class="d-block w-100" alt="ภาพที่ 3">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-ForzaHorizon4/Slide/slide4.png?v=<?php echo filemtime('image/Game/GP-ForzaHorizon4/Slide/slide4.png'); ?>" class="d-block w-100" alt="ภาพที่ 4">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-ForzaHorizon4/Slide/slide5.png?v=<?php echo filemtime('image/Game/GP-ForzaHorizon4/Slide/slide5.png'); ?>" class="d-block w-100" alt="ภาพที่ 5">
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
										<img src="image/Game/GP-ForzaHorizon4/logo.png?v=<?php echo filemtime('image/Game/GP-ForzaHorizon4/logo.png'); ?>" width="70%" height="auto" alt="BeamNGLogo">
									</div>
									
									<div class="col-lg-3">
										<h5>ค่ายเกม : Microsoft</h5>
										<p>
											<span>ราคาปกติ </span><s>1,260</s><span> TZCoin</span>
											<br><span>ส่วนลด </span><big>100</big><span> TZCoin</span></br>
											<span>เหลือเพียง </span><big class="TotalPriceStyle">1,160</big><span> TZCoin</span>
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
											Dynamic seasons change everything at the world’s greatest automotive festival. Go it alone or team up with others to explore beautiful and historic Britain in a shared open world. Collect, modify and drive over 450 cars. Race, stunt, create and explore – choose your own path to become a Horizon Superstar.
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
													<p style="margin:0;">ระบบปฏิบัติการ : Windows 10 รุ่น 15063 0 หรือสูงกว่า, Xbox One</p>
													<p style="margin:0;">หน่วยประมวลผล : Intel i3-4170 @ 3.7Ghz OR Intel i5 750 @ 2.67Ghz</p>
													<p style="margin:0;">หน่วยความจำ : แรม 8 GB</p>
													<p style="margin:0;">กราฟิกส์ : NVidia 650TI หรือ AMD R7 250x</p>
													<p style="margin:0;">หน่วยบันทึกข้อมูล : พื้นที่ว่างที่พร้อมใช้งาน 26 GB</p>
											</li>
										</p>
										<p>
											<li>
												แนะนำ
													<p style="margin:0;">ระบบปฏิบัติการ : Windows 10 รุ่น 15063 0 หรือสูงกว่า, Xbox One</p>
													<p style="margin:0;">หน่วยประมวลผล : Intel i7-3820 @ 3.6Ghz</p>
													<p style="margin:0;">หน่วยความจำ : แรม 12 GB</p>
													<p style="margin:0;">กราฟิกส์ : NVidia GTX 970 OR NVidia GTX 1060 3GB OR AMD R9 290x OR AMD RX 470</p>
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