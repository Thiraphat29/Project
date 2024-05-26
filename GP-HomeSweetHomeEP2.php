<html>
<?php session_start(); ?>
<head>
<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" /> <!--- ไอคอนบนหน้าเว็บ ---> 
<title>Home Sweet Home EP2 · TZS Online</title>
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
    					<li class="breadcrumb-item"><a href="GameOffline.php">เกมออฟไลน์</a></li>
						<li class="breadcrumb-item active" aria-current="page">Home Sweet Home EP2</li>
  					</ol>
				</nav>
				<!---------------------- ข้อมูล --------------------->
				<div class="card CardBGSetting"> <!----- Start พื้นหลัง ----->
					<div class="card-body CardBodyBGSetting BorderRadius"><!----- Start ชิ้นส่วนพื้นหลัง ----->
						
						<div class="card CardContentBGSetting">
							<div class="card-body CardBodyContentBGSetting">
								<h3 style="margin: 0">Home Sweet Home EP2 <span class="badge badge-secondary">ใหม่</span></h3>
							</div>
						</div>
						
						<div class="YoutubeResponsive">
							<iframe width="1280" height="720" src="https://www.youtube.com/embed/iMg5IzWOLbo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
											<img src="image/Game/GP-HomeSweetHome/Slide/slide1.png?v<?php echo filemtime('image/Game/GP-HomeSweetHome/Slide/slide1.png'); ?>" class="d-block w-100" alt="ภาพที่ 1">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-HomeSweetHome/Slide/slide2.png?v=<?php echo filemtime('image/Game/GP-HomeSweetHome/Slide/slide2.png'); ?>" class="d-block w-100" alt="ภาพที่ 2">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-HomeSweetHome/Slide/slide3.png?v=<?php echo filemtime('image/Game/GP-HomeSweetHome/Slide/slide3.png'); ?>" class="d-block w-100" alt="ภาพที่ 3">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-HomeSweetHome/Slide/slide4.png?v=<?php echo filemtime('image/Game/GP-HomeSweetHome/Slide/slide4.png'); ?>" class="d-block w-100" alt="ภาพที่ 4">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-HomeSweetHome/Slide/slide5.png?v=<?php echo filemtime('image/Game/GP-HomeSweetHome/Slide/slide5.png'); ?>" class="d-block w-100" alt="ภาพที่ 5">
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
										<img src="image/Game/GP-HomeSweetHome/logo.png?v=<?php echo filemtime('image/Game/GP-HomeSweetHome/logo.png'); ?>" width="50%" height="auto" alt="HomeSweethomeEP2Logo">
									</div>
									
									<div class="col-lg-3">
										<h5>ค่ายเกม : Steam</h5>
										<p>
											<big>450</big><span> TZCoin</span>
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
											Home Sweet Home กลับมาแล้ว ! พร้อมกับเรื่องราวสุดสยองที่จะมาสานต่อความหลอนกันในภาคนี้ ผู้เล่นจะได้ไขปริศนาไปพร้อม ๆ กับค้นพบความจริงอันน่าสะพรึงกลัว ที่ถูกซุกซ่อนอยู่ภายใต้เรื่องราวชวนจนหัวลุก พร้อมหรือยังที่จะเข้าสู่โลกแห่งตำนานความเชื่อไทย และค้นหาความจริงไปด้วยกัน
											</li>
										</p>
											
										<p>
											<li>
											ความสยองแบบไทย - ร่วมค้นหาโลกอันลึกลับที่ได้แรงบันดาลใจจากองค์ประกอบฉากที่มีความเป็นไทย
											</li>
										</p>		
										
										<p>
											<li>
											ครั้งแรกกับระบบการต่อสู้ - ติมสามารถโต้ตอบเหล่าวิญญาณร้ายได้แล้ว ด้วยอาวุธที่มีอยู่ในคลัง
											</li>
										</p>
										
										<p>
											<li>
											ศัตรูที่มาเป็นฝูง - ระบบถูกออกแบบมาให้ผสมผสานกันระหว่างการโจมตีและการ stealth โดยผู้เล่นสามารถหลบหลีกหรือโต้ตอบเหล่าศัตรูที่มาเป็นฝูงไปพร้อม ๆ กันได้
											</li>
										</p>
										<p>
											<li>
											ปริศนาที่ชวนขบคิด - ใช้ทักษะการสืบสวน เพื่อไขปริศนาและค้นหาความจริงเบื้องหลังการหายไปของเจน
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
													<p style="margin:0;">หน่วยประมวลผล : Intel® Core™ i5-4460</p>
													<p style="margin:0;">หน่วยความจำ : แรม 8 GB</p>
													<p style="margin:0;">กราฟิกส์ : NVIDIA® GeForce® GTX 760</p>
													<p style="margin:0;">หน่วยบันทึกข้อมูล : พื้นที่ว่างที่พร้อมใช้งาน 26 GB</p>
											</li>
										</p>
										<p>
											<li>
												แนะนำ
													<p style="margin:0;">ระบบปฏิบัติการ : Windows 7 / 8 / 8.1 / 10</p>
													<p style="margin:0;">หน่วยประมวลผล : Intel® Core™ i7-3770</p>
													<p style="margin:0;">หน่วยความจำ : แรม 16 GB</p>
													<p style="margin:0;">กราฟิกส์ : NVIDIA® GeForce® GTX 1050</p>
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