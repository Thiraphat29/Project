<html>
<?php session_start(); ?>
<head>
<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" /> <!--- ไอคอนบนหน้าเว็บ ---> 
<title>เกมออนไลน์ · TZS Online</title>
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
    								<li class="breadcrumb-item active" aria-current="page">เกมออนไลน์</li>
  								</ol>
							</nav>
						</div>
					</div>
		    	<!---------------------------------- เริ่ม ส่วนลดพิเศษ ------------------------------------------->
					<div class="card CardBGSetting"> <!----- Start พื้นหลัง ----->
						<div class="card-body CardBodyBGSetting"><!----- Start ชิ้นส่วนพื้นหลัง ----->
							<div class="row">
								<div class="col-6"><h3>เกมออนไลน์</h3></div>
							</div>

							<div class="row SpaceStyle"> <!-------- Start Row Of Game Box --------->
								<!----------- Box 1 --------------->
									<div class="col-md-3 mb-md-0 mb-3 BoxStyle"> 
										<div class="card">
										<img src="image/Game/GP-GrandTheftAutoV/head.png" class="card-img-top" alt="...">

											<div class="card-body BoxContentStyle">
												<h4 class="card-title">
													Grand Theft Auto V
												</h4>
												<p class="GamePriceStyle">
													<big>800</big><span> TZCoin</span>
												</p>

												<div>
													<a href="GP-GrandTheftAutoV.php"><button href="#" type="button" class="btn btn-outline-info btn-lg btn-block">ดูเพิ่มเติม</button></a>
												</div>
											</div>
										</div>
									</div>
								<!---------- Box 2 -------------->
									<div class="col-md-3 mb-md-0 mb-3 BoxStyle"> 
										<div class="card">
										<img src="image/Game/GP-PUBG/head.png" class="card-img-top" alt="...">

											<div class="card-body BoxContentStyle">
												<h4 class="card-title">
													PLAYERUNKNOWN'S BATTLEGROUNDS
												</h4>
												<p class="GamePriceStyle">
													<big>520</big><span> TZCoin</span>
												</p>

												<div>
													<a href="GP-PlayerUnknowBattlegrounds.php"><button href="#" type="button" class="btn btn-outline-info btn-lg btn-block">ดูเพิ่มเติม</button></a>
												</div>
											</div>
										</div>
									</div>
								<!---------- Box 3 -------------->
									<div class="col-md-3 mb-md-0 mb-3 BoxStyle"> 
										<div class="card">
										<img src="image/Game/GP-StardewValley/head.png" class="card-img-top" alt="...">

											<div class="card-body BoxContentStyle">
												<h4 class="card-title">
													Stardew Valley
<!--													<span class="badge badge-secondary">ใหม่</span>-->
												</h4>
												<p class="GamePriceStyle">
													<span>ราคาปกติ </span><s>315</s><span> TZCoin</span>
													<br><span>ส่วนลด </span><big>50</big><span> TZCoin</span></br>
													<span>เหลือเพียง </span><big class="TotalPriceStyle">265</big><span> TZCoin</span>
												</p>

												<div>
													<a href="GP-StardewValley.php"><button href="#" type="button" class="btn btn-outline-info btn-lg btn-block">ดูเพิ่มเติม</button></a>
												</div>
											</div>
										</div>
									</div>
								<!---------- Box 4 -------------->
									<div class="col-md-3 mb-md-0 mb-3 BoxStyle"> 
										<div class="card">
										<img src="image/Game/GP-ForzaHorizon4/head.png" class="card-img-top" alt="...">

											<div class="card-body BoxContentStyle">
												<h4 class="card-title">
													Forza Horizon 4 Standard
<!--													<span class="badge badge-secondary">ใหม่</span>-->
												</h4>
												<p class="GamePriceStyle">
													<span>ราคาปกติ </span><s>1,260</s><span> TZCoin</span>
													<br><span>ส่วนลด </span><big>100</big><span> TZCoin</span></br>
													<span>เหลือเพียง </span><big class="TotalPriceStyle">1,160</big><span> TZCoin</span>
												</p>

												<div>
													<a href="GP-ForzaHorizon4.php"><button type="button" class="btn btn-outline-info btn-lg btn-block">ดูเพิ่มเติม</button></a>
												</div>
											</div>
										</div>
									</div>
								<!---------- End Box -------------->
							</div><!-------- End Row Of Game Box -------->

							<div class="row SpaceStyle"> <!-------- Start Row Of Game Box --------->
								<!----------- Box 1 --------------->
									<div class="col-md-3 mb-md-0 mb-3 BoxStyle"> 
										<div class="card">
										<img src="image/Game/GP-Rainbow6/head.png" class="card-img-top" alt="...">

											<div class="card-body BoxContentStyle">
												<h4 class="card-title">
													Rainbow Six Siege
<!--													<span class="badge badge-secondary">ใหม่</span>-->
												</h4>
												<p class="GamePriceStyle">
													<span>ราคาปกติ </span><s>600</s><span> TZSCoin</span>
													<br><span>ส่วนลด </span><big>45</big><span> TZSCoin</span></br>
													<span>เหลือเพียง </span><big class="TotalPriceStyle">555</big><span> TZSCoin</span>
												</p>

												<div>
													<a href="GP-TomClancyRainbowSixSiege.php"><button href="#" type="button" class="btn btn-outline-info btn-lg btn-block">ดูเพิ่มเติม</button></a>
												</div>
											</div>
										</div>
									</div>
								<!----------- Box 2 --------------->
									<div class="col-md-3 mb-md-0 mb-3 BoxStyle"> 
										<div class="card">
										<img src="image/Game/GP-HuntShowdown/head.png" class="card-img-top" alt="...">

											<div class="card-body BoxContentStyle">
												<h4 class="card-title">
													Hunt : Showdown
												</h4>
												<p class="GamePriceStyle">
													<big>576</big><span> TZCoin</span>
												</p>

												<div>
													<a href="GP-HuntShutdown.php"><button href="#" type="button" class="btn btn-outline-info btn-lg btn-block">ดูเพิ่มเติม</button></a>
												</div>
											</div>
										</div>
									</div>
								<!---------- Box 3 -------------->
									<div class="col-md-3 mb-md-0 mb-3 BoxStyle"> 
										<div class="card">
										<img src="image/Game/GP-Pes2020/head.png" class="card-img-top" alt="...">

											<div class="card-body BoxContentStyle">
												<h4 class="card-title">
													eFootball PES 2020

												</h4>
												<p class="GamePriceStyle">
													<big>520</big><span> TZCoin</span>
												</p>

												<div>
													<a href="GP-PES2020.php"><button href="#" type="button" class="btn btn-outline-info btn-lg btn-block">ดูเพิ่มเติม</button></a>
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