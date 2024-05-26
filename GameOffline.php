<html>
<?php session_start(); ?>
<head>
<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" /> <!--- ไอคอนบนหน้าเว็บ ---> 
<title>เกมออฟไลน์ · TZS Online</title>
	<?php
		require("Factor/BoStCSS121102.php");
	?>
</head>

<body class="body-style">
	<?php
		require("Factor/NavBar121102.php");
	?>

<font-content>
    	<div class="container"> <!---- แบ่งกึ่งกลางหน้า ---->
		<?php
				require("Factor/Slide121102.php");
			?>
		</div>
		
		<div class="container"> <!---- แบ่งกึ่งกลางหน้า ---->
		<div class=row>
		<!--------------------------------------------- เนื้อหาฝั่งซ้าย ----------------------------------------------------->
			<div class="col-lg-3 ColContentSetting">
				<?php
					require("Factor/ContentLeft.php");
				?>
			</div>
	  	<!--------------------------------------------- เนื้อหาฝั่งขวา ----------------------------------------------------->
			<div class="col-lg-9 ColContentSetting"> <!--  -->
					<div class="row">
						<div class="col-12">
							<nav aria-label="breadcrumb">
  								<ol class="breadcrumb SpaceStyle" style="background-color: #111111">
    								<li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
    								<li class="breadcrumb-item active" aria-current="page">เกมออฟไลน์</li>
  								</ol>
							</nav>
						</div>
					</div>
		    	<!---------------------------------- เริ่ม ส่วนลดพิเศษ ------------------------------------------->
					<div class="card CardBGSetting"> <!----- Start พื้นหลัง ----->
						<div class="card-body CardBodyBGSetting"><!----- Start ชิ้นส่วนพื้นหลัง ----->
							<div class="row">
								<div class="col-6"><h3>เกมออฟไลน์</h3></div>
							</div>

							<div class="row"> <!-------- Start Row Of Game Box --------->
								<!----------- Box 1 --------------->
									<div class="col-md-3 mb-md-0 mb-3 BoxStyle"> 
										<div class="card">
										<img src="image/Game/GP-HomeSweetHome/head.png" class="card-img-top" alt="...">

											<div class="card-body BoxContentStyle">
												<h4 class="card-title">
													Home Sweet Home EP2
													<span class="badge badge-secondary">ใหม่</span>
												</h4>
												<p class="GamePriceStyle">
													<big>450</big><span> TZCoin</span>
												</p>

												<div>
													<a href="GP-HomeSweetHomeEP2.php"><button href="#" type="button" class="btn btn-outline-info btn-lg btn-block">ดูเพิ่มเติม</button></a>
												</div>
											</div>
										</div>
									</div>
								<!---------- Box 2 -------------->
									<div class="col-md-3 mb-md-0 mb-3 BoxStyle"> 
										<div class="card">
										<img src="image/Game/GP-DyingLight/head.png" class="card-img-top" alt="...">

											<div class="card-body BoxContentStyle">
												<h4 class="card-title">
													Dying Light
												</h4>
												<p class="GamePriceStyle">
													<big>300</big><span> TZCoin</span>
												</p>

												<div>
													<a href="GP-DyingLight.php"><button href="#" type="button" class="btn btn-outline-info btn-lg btn-block">ดูเพิ่มเติม</button></a>
												</div>
											</div>
										</div>
									</div>
								<!---------- Box 3 -------------->
									<div class="col-md-3 mb-md-0 mb-3 BoxStyle"> 
										<div class="card">
										<img src="image/Game/GP-BeamNGDrive/head.png" class="card-img-top" alt="...">

											<div class="card-body BoxContentStyle">
												<h4 class="card-title">
													BeamNG Drive
<!--													<span class="badge badge-secondary">ใหม่</span>-->
												</h4>
												<p class="GamePriceStyle">
													<span>ราคาปกติ </span><s>359</s><span> TZCoin</span>
													<br><span>ส่วนลด </span><big>20</big><span> TZCoin</span></br>
													<span>เหลือเพียง </span><big class="TotalPriceStyle">339</big><span> TZCoin</span>
												</p>

												<div>
													<a href="GP-BeamNGDrive.php"><button href="#" type="button" class="btn btn-outline-info btn-lg btn-block">ดูเพิ่มเติม</button></a>
												</div>
											</div>
										</div>
									</div>
								<!---------- End Box -------------->
							</div><!-------- End Row Of Game Box -------->
						</div> <!----- End ชิ้นส่วนพื้นหลัง ----->
					</div> <!----- End พื้นหลัง ----->
				<!---------------------------------- เกมแนะนำ ----------------------------------------->
		</div>
	</div>
<!------------------------------------------------ End Of Content --------------------------------------------------------->
		</div> <!---- End แบ่งกึ่งกลางหน้า ---->
	<?php
		require("Factor/ScrollTop121102.php");
	?>
</font-content>
	
	<?php
		require("Factor/Footer121102.php");
	?>
<body>
</body>
</html>