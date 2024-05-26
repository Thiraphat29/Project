<html>
<?php session_start(); ?>
<head>
<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" /> <!--- ไอคอนบนหน้าเว็บ ---> 
<title>Dying Light · TZS Online</title>
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
						<li class="breadcrumb-item active" aria-current="page">Dying Light</li>
  					</ol>
				</nav>
				<!---------------------- ข้อมูล --------------------->
				<div class="card CardBGSetting"> <!----- Start พื้นหลัง ----->
					<div class="card-body CardBodyBGSetting BorderRadius"><!----- Start ชิ้นส่วนพื้นหลัง ----->
						
						<div class="card CardContentBGSetting">
							<div class="card-body CardBodyContentBGSetting">
								<h3 style="margin: 0">Dying Light</h3>
							</div>
						</div>
						
						<div class="YoutubeResponsive">
							<iframe width="1280" height="720" src="https://www.youtube.com/embed/VlEO8Swxz-k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
											<img src="image/Game/GP-DyingLight/Slide/slide1.png?v=<?php echo filemtime('image/Game/GP-DyingLight/Slide/slide1.png'); ?>" class="d-block w-100" alt="ภาพที่ 1">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-DyingLight/Slide/slide2.png?v=<?php echo filemtime('image/Game/GP-DyingLight/Slide/slide2.png'); ?>" class="d-block w-100" alt="ภาพที่ 2">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-DyingLight/Slide/slide3.png?v=<?php echo filemtime('image/Game/GP-DyingLight/Slide/slide3.png'); ?>" class="d-block w-100" alt="ภาพที่ 3">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-DyingLight/Slide/slide4.png?v=<?php echo filemtime('image/Game/GP-DyingLight/Slide/slide4.png'); ?>" class="d-block w-100" alt="ภาพที่ 4">
										</div>

										<div class="carousel-item" data-interval="6000">
											<img src="image/Game/GP-DyingLight/Slide/slide5.png?v=<?php echo filemtime('image/Game/GP-DyingLight/Slide/slide5.png'); ?>" class="d-block w-100" alt="ภาพที่ 5">
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
										<img src="image/Game/GP-DyingLight/logo.png?v=<?php echo filemtime('image/Game/GP-DyingLight/logo.png'); ?>" width="50%" height="auto" alt="DyingLightLogo">
									</div>
									
									<div class="col-lg-3">
										<h5>ค่ายเกม : Steam</h5>
										<p>
											<big>300</big><span> TZCoin</span>
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
											เกมแอคชันเอาชีวิตรอดมุมมองบุคคลที่หนึ่ง ภายในฉากโอเพนเวิร์ลบนโลกหลังเกิดหายนะครั้งใหญ่ที่เต็มไปด้วยเหล่าซอมบี้กระหายเนื้อ ผจญไปในเมืองที่ถูกทำลายด้วยน้ำมือของไวรัสลึกลับที่ระบาดอย่างรวดเร็ว ค้นหาเสบียง สร้างอาวุธ และเผชิญหน้ากับฝูงซอมบี้
											</li>
										</p>
											
										<p>
											<li>
											จากทีมงานผู้สร้างเกมดังอย่าง Dead Island และ Call of Juarez คว้ารางวัลและได้รับการเสนอชื่อชิงรางวัลในวงการมากกว่ากว่า 50 รายการ ตัวเกมซึ่งมีรูปแบบการเล่นที่สมบูรณ์แบบในทุกๆ ด้าน จนกลายเป็นมาตรฐานใหม่ของเกมซอมบี้มุมมองบุคคลที่หนึ่ง
											</li>
										</p>		
										
										<p>
											<li>
											เอาชีวิตรอดในเมืองที่เต็มไปด้วยไวรัสซอมบี้! รับมือกับการตัดสินใจอันแสนยากลำบาก ซึ่งคุณจะต้องเลือกในระหว่างการทำภารกิจลับ ความจงรักภักดีต่อผู้บังคับบัญชาของคุณนั้นจะอยู่เหนือความมุ่งมั่นในการช่วยเหลือผู้รอดชีวิตหรือไม่ คุณเลือกได้…
											</li>
										</p>
										
										<p>
											<img class="ImgResponsive" src="image/Game/GP-DyingLight/detail1.gif?v=<?php echo filemtime('image/Game/GP-DyingLight/detail1.gif'); ?>" alt="DyingLightLogo">
										</p>
										
										<p>
											<li>
											ท่องในตัวเมืองได้อย่างอิสระเสรี และเพลิดเพลินไปกับบรรยากาศที่ไม่อาจหาจากที่ไหนได้อีก อาศัยความคล่องตัวของคุณในการปีนป่ายสำรวจอาคารทุกแห่ง และไปยังพื้นที่อันสุดไกลโพ้น
											</li>
										</p>
										
										<p>
											<li>
											ลุ้นระทึกไปกับฉากต่อสู้เลือดสาด และหาวิธีในการจัดการกับศัตรูของคุณที่มีอย่างหลากหลาย ผสมผสานอาวุธประเภทต่างๆ เข้ากับความสามารถของคุณและสภาพแวดล้อมเพื่อฉวยความได้เปรียบ
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
													<p style="margin:0;">ระบบปฏิบัติการ : Windows® 7 64-bit / Windows® 8 64-bit / Windows® 8.1 64-bit</p>
													<p style="margin:0;">หน่วยประมวลผล :  Intel® Core™ i5-2500 @3.3 GHz / AMD FX-8320 @3.5 GHz</p>
													<p style="margin:0;">หน่วยความจำ : แรม 8 GB DDR3</p>
													<p style="margin:0;">กราฟิกส์ : NVIDIA® GeForce® GTX 560 / AMD Radeon™ HD 6870 (1GB VRAM)</p>
													<p style="margin:0;">หน่วยบันทึกข้อมูล : พื้นที่ว่างที่พร้อมใช้งาน 40 GB</p>
											</li>
										</p>
										<p>
											<li>
												แนะนำ
													<p style="margin:0;">ระบบปฏิบัติการ : Windows® 7 64-bit / Windows® 8 64-bit / Windows® 8.1 64-bit</p>
													<p style="margin:0;">หน่วยประมวลผล : Intel® Core™ i5-4670K @3.4 GHz / AMD FX-8350 @4.0 GHz</p>
													<p style="margin:0;">หน่วยความจำ : แรม 8 GB</p>
													<p style="margin:0;">กราฟิกส์ : NVIDIA® GeForce® GTX 780 / AMD Radeon™ R9 290 (2GB VRAM)</p>
													<p style="margin:0;">หน่วยบันทึกข้อมูล : พื้นที่ว่างที่พร้อมใช้งาน 40 GB</p>
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