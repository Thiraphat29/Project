<html>
<?php session_start(); ?>
<head>
<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" /> <!--- ไอคอนบนหน้าเว็บ ---> 
<title>Game Page · TZS Online</title>
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
    					<li class="breadcrumb-item"><a href="Special Discount.php">ส่วนลดพิเศษ</a></li>
						<li class="breadcrumb-item active" aria-current="page">BeamNG Drive</li>
  					</ol>
				</nav>
				<!---------------------- ข้อมูล --------------------->
				<div class="card CardBGSetting"> <!----- Start พื้นหลัง ----->
					<div class="card-body CardBodyBGSetting BorderRadius"><!----- Start ชิ้นส่วนพื้นหลัง ----->
						
						<div class="card CardContentBGSetting">
							<div class="card-body CardBodyContentBGSetting">
								<h3 style="margin: 0">BeamNG Drive</h3>
							</div>
						</div>
						
						<div class="YoutubeResponsive">
							<iframe width="1280" height="720" src="https://www.youtube.com/embed/7vGYVUCmxeI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
											<img src="image/Game/GP-BeamNGDrive/Slide/slide1.png?v=<?php echo filemtime('image/Game/GP-BeamNGDrive/Slide/slide1.png'); ?>" class="d-block w-100" alt="ภาพที่ 1">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-BeamNGDrive/Slide/slide2.png?v=<?php echo filemtime('image/Game/GP-BeamNGDrive/Slide/slide2.png'); ?>" class="d-block w-100" alt="ภาพที่ 2">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-BeamNGDrive/Slide/slide3.png?v=<?php echo filemtime('image/Game/GP-BeamNGDrive/Slide/slide3.png'); ?>" class="d-block w-100" alt="ภาพที่ 3">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-BeamNGDrive/Slide/slide4.png?v=<?php echo filemtime('image/Game/GP-BeamNGDrive/Slide/slide4.png'); ?>" class="d-block w-100" alt="ภาพที่ 4">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-BeamNGDrive/Slide/slide5.png?v=<?php echo filemtime('image/Game/GP-BeamNGDrive/Slide/slide5.png'); ?>" class="d-block w-100" alt="ภาพที่ 5">
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
										<img src="image/Game/GP-BeamNGDrive/logo.png?v=<?php echo filemtime('image/Game/GP-BeamNGDrive/logo.png'); ?>" width="70%" height="auto" alt="BeamNGLogo">
										<br>
									</div>
									
									<div class="col-lg-3">
										<h5>ค่ายเกม : Steam</h5>
										<p>
											<span>ราคาปกติ </span><s>359</s><span> TZCoin</span>
											<br><span>ส่วนลด </span><big>20</big><span> TZCoin</span></br>
											<span>เหลือเพียง </span><big class="TotalPriceStyle">339</big><span> TZCoin</span>
										</p>
									</div>
									<div class="col-lg-2">
										<div align="right">
											<button type="button" class="btn btn-block btn-outline-success" style="height: 100%">สั่งซื้อ</button>
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
											BeamNG.drive is a realistic, immersive driving game offering near-limitless possibilities. Our soft-body physics engine simulates every component of a vehicle in real time, resulting in realistic, dynamic behavior.
											</li>
										</p>
											
										<p>
											<li>
											The driving feel is authentic and visceral, and crashes are realistic and violent; yet the physics are accessible enough to drive with a keyboard or gamepad while still being authentic with a full racing wheel with uncompromising realism.
											</li>
										</p>		
										
										<p>
											<li>
											Environments and vehicles in BeamNG.drive are hand-crafted with passionate attention to detail. With years of meticulous design, research, and experience, we authentically recreate the feeling and excitement of real world driving.
											</li>
										</p>
										
										<p>
											<li>
											We are a small team from around the world with no obligations to publishers or outside interests. Our users and modding community are our first priority. Help us make BeamNG.drive the ultimate driving experience and discover what an open and uncompromising soft-body vehicle simulator can be.
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
											TZS Online จะไม่รับผิดชอบต่อความเสียหาย ค่าใช้จ่าย หรือความสูญเสีย ที่อาจเกิดขึ้นจากการใช้งานเว็บไซต์ หรือเว็บไซต์ที่เชื่อมโยงกับเว็บไซต์ TZS Online ซึ่งรวมถึงจากความไม่ถูกต้องแม่นยำของข้อมูล ความล่าช้าในการถ่ายโอนข้อมูล ระยะเวลาในการเผยแพร่ข้อมูล เหตุขัดข้องหรืออุปสรรคของการเชื่อมต่อ ความผิดพลาดในการแสดงผล ความเสถียรของระบบ ไวรัสคอมพิวเตอร์
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
		</div>
		</font-content>
	</div>
		
	<?php
		require("Factor/Footer121102.php");
	?>
</body>
</html>