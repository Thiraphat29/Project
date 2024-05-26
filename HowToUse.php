<html>
<?php session_start(); ?>
<head>
	<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" />
	<!--- ไอคอนบนหน้าเว็บ --->
	<title>เกี่ยวกับ · TZS Online</title>
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
							<li class="breadcrumb-item active" aria-current="page">วิธีการใช้งานเว็บ</li>
						</ol>
					</nav>
					<!---------------------- ข้อมูล --------------------->
					<div class="card CardBGSetting">
						<!----- Start พื้นหลัง ----->
						<div class="card-body CardBodyBGSetting">
							<!----- Start ชิ้นส่วนพื้นหลัง ----->
							<div class="card CardContentBGSetting">
								<div class="card-body CardContentBGSetting">
									<h3 align="center">วิธีการใช้งานเว็บ</h3>
									<br>
									<h5>ขั้นแรก</h5>
									<p>
										<img src="image/huse/1.png">
										<p>
										</p>
										<img src="image/huse/6.png" width="750px" max-height="600px">
										<p>

											<h3> 1.Login หรือ Register เพื่อเข้าสู่ระบบ </h3>

										</p>
										<img src="image/huse/3.png" width="550px" max-height="650px">


										<p>
											<h3>2.เลือกเกมที่เราจะซื้อ</h3>
										</p>
										<img src="image/huse/4.png" width="500px" max-height="400px">
										<p>
											<h3>3.กดสั่งซื้อ</h3>
										</p>
										<img src="image/huse/7.png ">
										<p>
											<h3>4.คลิ๊กเข้าไปที่หน้าตะกร้า</h3>
										</p>
									</p>
									<img src="image/huse/5.png" width="500px" max ="800px">
									<p>
										<p>
											<h3>5.1 เพิ่มจำนวนสิ้นค้าหรือลบสินค้า</h3>
											<h3>5.2 เมื่อเพิ่มสินค้าต้องกดคำนวณใหม่อีกครั้งเพื่อ UPDATE ราคา</h3>
											<h3>5.3 ยืนยัน ORDER</h3>

										</p>
										<img src="image/huse/2.png" width="750px" max-height="600px">
										<p>
											<h3>6.ต้องเติมเงินเข้าสู่ระบบทุกครั้ง</h3>

										</p>
								</div>
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