<html>
<?php session_start(); ?>
<head>
	<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" />
	<!--- ไอคอนบนหน้าเว็บ --->
	<title>เกี่ยวกับ · TZS Online</title>
	<?php
	require("Factor/BoStCSS121102.php");
	?>
	<style>
		input[type=text],
		select,
		textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}
	</style>
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
						<ol class="breadcrumb SpaceStyle" style="background-color: #000000">
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
									<h3 align="center">ติดต่อสอบถาม</h3>
									<br>
									<form action="index.php">
										<label for="fname">ชื่อจริง</label>
										<input type="text" id="fname" name="firstname" placeholder="ชื่อจริงของคุณ">

										<label for="lname">นามสกุล</label>
										<input type="text" id="lname" name="lastname" placeholder="นามสกุลของคุณ">


										<label for="lname">เบอร์ติดต่อกลับ</label>
										<input type="text" id="lname" name="lastname" placeholder="เบอร์ที่สามารถติดต่อได้">
										
										<label for="subject">ข้อความ</label>
										<textarea id="subject" name="subject" placeholder="เขียนเกี่ยวกับปัญหาที่คุณพบ" style="height:200px"></textarea>

										<div align="center"><button class="login btn btn-lg btn-success btn-block LoginBT">ส่ง</button></div>
									</form>
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