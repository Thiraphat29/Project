<?php session_start(); ?>
<head>
	<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" />
	<!--- ไอคอนบนหน้าเว็บ --->
	<title>สมัครสมาชิก · TZS Online</title>
	<?php require("Factor/BoStCSS121102.php"); ?>
</head>

<body class="body-style">
	<?php
	require("Factor/NavBar121102.php");
	require("conect.php");

	if (isset($_POST['input_uname']) && isset($_POST['input_email'])) :
		require("conect.php");
		$sql = "INSERT INTO customer (c_Fname,c_Uname,c_email,c_password,c_address,c_providecode) 
		VALUES (:c_Fname,:c_Uname,:c_email,:c_password,:c_address,:c_providecode)";

		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':c_Fname', $_POST['input_fname']);
		$stmt->bindParam(':c_Uname', $_POST['input_uname']);
		$stmt->bindParam(':c_email', $_POST['input_email']);
		$stmt->bindParam(':c_password', $_POST['pass_word']);
		$stmt->bindParam(':c_address', $_POST['address']);
		$stmt->bindParam(':c_providecode', $_POST['postzip']);
		if ($stmt->execute()) :
			echo '<script> alert("สมัครสมาชิกเรียบร้อย") </script>';
			echo '<script> window.location.href = "login.php"; </script>'; // แก้ไขที่นี่เป็นการใช้ JavaScript เพื่อ redirect
		else :
			echo '<script> alert("สมัครสมาชิกอีกครั้ง") </script>';
			echo '<script> window.location.href = "register.php"; </script>'; // แก้ไขที่นี่เป็นการใช้ JavaScript เพื่อ redirect
		endif;
		$conn = null;
	endif;
	?>

	<div class="SpaceStyle"></div>

	<div class="container">
		<font-content>
			<div class=row>
				<!--------------------------------------------- เนื้อหาฝั่งซ้าย ----------------------------------------------------->
				<div class="col-lg-3 ColContentSetting">
					<div class="card CardBGSetting">
						<!----- Start พื้นหลัง ----->
						<div class="card-body CardBodyBGSetting">
							<!----- Start ชิ้นส่วนพื้นหลัง ----->
							<div class="card CardContentBGSetting">
								<div class="card-body CardBodyContentBGSetting">
									<h5>ทำไมต้องสมัครสมาชิก?</h5>
									<p>
										<li>เพื่อใช้ในการซื้อเกมจากเว็บของเรา</li>
									</p>
									<p>
										<li>สามารถเก็บยอดเงินไว้ใช้ในการสั่งซื้อรครั้งต่อไปได้</li>
									</p>
									<li>ได้รับสิทธิพิเศษมากมาย</li>
								</div>
							</div>
							<a href="About.php" target="_blank">เรียนรู้เพิ่มเติมเกี่ยวกับ TZS Online</a>
						</div>
					</div>
				</div>
				<!--------------------------------------------- เนื้อหาฝั่งขวา ----------------------------------------------------->
				<div class="col-lg-9 ColContentSetting">
					<div class="card CardBGSetting">
						<!----- Start พื้นหลัง ----->
						<div class="card-body CardBodyBGSetting">
							<!----- Start ชิ้นส่วนพื้นหลัง ----->
							<div class="card CardContentBGSetting" style="margin-bottom: 0">
								<div class="card-body CardBodyContentBGSetting">
									<form action="Register.php" method="POST">

										<div class="form-group">
											<h2>สมัครสมาชิก</h2>
										</div>

										<div class="form-group">
											<h5>ชื่อ-นามสกุล</h5>
											<input type="text" class="form-control" data-required="กรุณากรอกชื่อ นามสกุล" name="input_fname" id="input_name" autocomplete="off" value="" placeholder="ชื่อ-นามสกุล ของคุณ" required>

											<small class="form-text text-muted">
												ใส่ ชื่อ-นามสกุล ของคุณเป็น "ภาษาไทย"
											</small>
										</div>

										<div class="form-group">
											<h5>ชื่อผู้ใช้</h5>
											<input type="text" class="form-control" data-required="" name="input_uname" id="input_name" autocomplete="off" value="" placeholder="ชื่อผู้ใช้" required>

											<small class="form-text text-muted">
												โปรดกรอกชื่อผู้ใช้ ความยาวไม่ต่ำกว่า 6 ตัวอักษร
											</small>
										</div>

										<div class="form-group">
											<h5>อีเมล</h5>
											<input type="email" class="form-control" placeholder="ใส่อีเมลของคุณ" data-required="กรุณากรอกอีเมล" name="input_email" id="input_email" autocomplete="off" value="" required>

											<small class="form-text text-muted">
												อีเมลใช้สำหรับการส่งโค้ดเกม ดังนั้นคุณควรใช้อีเมลที่คุณใช้งานอยู่จริง
											</small>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<h5>รหัสผ่าน</h5>
												<input type="password" class="form-control css-require" placeholder="ใส่รหัสผ่าน" name="pass_word" required>
												<small class="form-text text-muted">
													รหัสผ่านควรมีความยาวมากกว่าหรือเท่ากับ 8 ตัวอักษร
												</small>
											</div>
											<div class="form-group col-md-6">
												<h5>ยืนยันรหัสผ่าน</h5>
												<input type="password" class="form-control css-require" placeholder="ยืนยันรหัสผ่านอีกครั้ง" required>
												<small class="form-text text-muted">
													ยืนยันรหัสผ่านอีกครั้ง
												</small>
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-9">
												<h5>ที่อยู่</h5>
												<input type="text" class="form-control css-require" placeholder="ที่อยุ่ปัจจุบัน" name="address" required>
												<small class="form-text text-muted">
													กรอกตามที่อยู่ปัจจุบันของคุณ
												</small>
											</div>

											<div class="form-group col-md-3">
												<h5>รหัสไปรษณีย์</h5>
												<input type="text" class="form-control css-require" placeholder="" name="postzip" required>
											</div>
										</div>

										<div style="text-align: center">
											<div class="form-group">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label css-require" for="customCheck1">ยอมรับ <a href="About.php" target="_blank">เงื่อนไขและข้อตกลง</a></label>
												</div>
											</div>
											<input type="submit" class="btn btn-primary btn-lg" onclick="goBack()" value="สมัครสมาชิก">
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-------------------------------------------------------------------------------------------------->
			</div>
			<?php require("Factor/ScrollTop121102.php"); ?>
		</font-content>
	</div>
</body>

</html>
