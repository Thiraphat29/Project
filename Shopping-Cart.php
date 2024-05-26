<html>
<?php session_start(); ?>
<head>
	<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" />
	<!--- ไอคอนบนหน้าเว็บ --->
	<title>รถเข็นสินค้า · TZS Online</title>
	<?php

$total = 0; // กำหนดค่าเริ่มต้นให้ $total เป็น 0
$susces = true; // กำหนดค่าให้ $susces ให้เป็น true เพื่อทดสอบ

require("Factor/BoStCSS121102.php");

if ($susces) { // ใช้ตัวแปร $susces ในเงื่อนไข if
    $r = 555;
    $f = 1160;
    // ตรวจสอบว่ามีค่าใน $_POST['forza'] และ $_POST['rainbow'] หรือไม่
	$qf = isset($_POST['forza']) ? $_POST['forza'] : 0;
	$qr = isset($_POST['rainbow']) ? $_POST['rainbow'] : 0;
    $resultf = $qf * $f;
    $resultr = $qr * $r;
    $total = $resultf + $resultr;
}
?>

</head>

<body class="body-style">
	<?php
	require("Factor/NavBar121102.php");
	?>
	<div class="SpaceStyle"></div>
		
	<div class="container">
		<font-content>
			
		<form action="Shopping-Cart.php" method="POST">
			<div class="card CardBGSetting"> <!----- Start พื้นหลัง ----->
				<div class="card-body CardBodyBGSetting BorderRadius"> <!----- Start ชิ้นส่วนพื้นหลัง ----->
					
							<h3 class="BorderLine" align="center">รถเข็นสินค้า</h3>
								<div class="row">
									<div class="col-lg-2" align="center">
										<h4>สินค้า</h4>
									</div>
									
									<div class="col-lg-5" align="center">
									</div>
									
									<div class="col-lg-2" align="center">
										<h4>ราคา/หน่วย</h4>
									</div>
									
									<div class="col-lg-2" align="center">
										<h4>จำนวน</h4>
									</div>
									
									<div class="col-lg-1" align="center">
									</div>
								</div>
							
					<div class="card CardContentBGSetting" id="for"> <!----- Start พื้นหลังเนื้อหา ----->
						<div class="card-body CardBodyContentBGSetting"> <!----- Start พื้นหลังเนื้อหา ----->
							<div class="row" >
									<div class="col-lg-2" align="center">
										<img class="product" src="image/Game/GP-ForzaHorizon4/head.png" width="auto" height="120px">
									</div>
									
									<div class="col-lg-5" align="center">
										<div style="font-size:20px;">Forza Horizon 4</div>
									</div>
									
									<div class="col-lg-2" align="center">
										<div type="number" name="price" style="font-size:20px;">1160</div>
									</div>
									
									<div class="col-lg-2" align="center">
										<select class="custom-select mr-sm-2" id="" type="number" name="forza" min="1" value="1" maxlength="100" style="margin-bottom: 10px">
<!--											<option selected>1</option>-->
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>

										 </select>
									</div>
								
									<div class="col-lg-1" align="center">
										<button type="button" class="delf btn btn-outline-danger btn-block">ลบ</button>
									</div>
							</div>
						</div>
					</div>
					
					<div class="card CardContentBGSetting" id="rain"> <!----- Start พื้นหลังเนื้อหา ----->
						<div class="card-body CardBodyContentBGSetting"> <!----- Start พื้นหลังเนื้อหา ----->
							<div class="row">
									<div class="col-lg-2" align="center">
										<img class="product" src="image/Game/GP-Rainbow6/head.png" width="auto" height="120px">
									</div>
									
									<div class="col-lg-5" align="center">
										<div style="font-size:20px;">Rainbow Six Siege</div>
									</div>
									
									<div class="col-lg-2" align="center">
										<div type="number" name="price" style="font-size:20px;">555</div>
									</div>
									
									<div class="col-lg-2" align="center">
										 <select class="custom-select mr-sm-2" id="" type="number" name="rainbow" min="1" value="1" maxlength="100" style="margin-bottom: 10px">
<!--											<option selected>1</option>-->
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>

										 </select>
									</div>
								
									<div class="col-lg-1" align="center">
										<button type="button" class="delr btn btn-outline-danger btn-block">ลบ</button>
									</div>
							</div>
						</div>
					</div>
					
					<div class="card CardContentBGSetting" id="for"> <!----- Start พื้นหลังเนื้อหา ----->
						<div class="card-body CardBodyContentBGSetting"> <!----- Start พื้นหลังเนื้อหา ----->
							<div class="row" >
									
									<div class="col-lg-7" align="center">
										<h4>รวมทั้งหมด</h4>
									</div>
									
									<div class="col-lg-4" align="center">
										<h5>
											<?php echo number_format($total, 2); ?> TZCoin
										</h5>
										<br>
										<button class="btn btn-outline-info btn-lg btn-block" type="submit" class="button" name="cal"><b>คำนวณราคา</button>
										<br>
										<button type="button" class="btn btn-outline-success btn-lg btn-block" data-toggle="modal" data-target="#ConfirmPay"><b>ยืนยันการสั่งซื้อ</button>
									</div>
								
									<div class="col-lg-1" align="center">
									</div>
							</div>
						</div>
					</div>
				</div>
		</form>
								
								<div class="modal fade" id="ConfirmPay" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								  <div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content" style="background-color: #090909; border-width: 2px; border-color: #ffc107;">

									  <div class="modal-header" style="border: 0;">
										<h4 class="modal-title" id="exampleModalCenterTitle">
											ยืนยันการสั่งซื้อ
										</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>

									  <div class="modal-body">
										คุณแน่ใจหรือไม่ว่าต้องยืนยันการสั่งซื้อ และหักจำนวนเงินของคุณไป
										<p><li>
											หมายเหตุ : เกมที่คุณสั่งซื้อจะถูกส่งในอีเมลของคุณ 
										</li></p>
									  </div>
									  <div class="modal-footer" style="border: 0;">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#PaymentConplete">ตกลง</button>
										<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
									  </div>
									</div>
								  </div>
								</div>
					
					<div class="modal fade" id="PaymentConplete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content" style="background-color: #090909; border-width: 2px; border-color:#28a745;">

								<div class="modal-header" style="border: 0;">
									<h4 class="modal-title" id="exampleModalCenterTitle">
										การสั่งซื้อสำเร็จ!
									</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>

								<div class="modal-body">
										การสั่งซื้อสำเร็จ คุณสามารถตรวจสอบสินค้าของคุณไดด้ที่อีเมลของคุณ
								</div>
								<div class="modal-footer" style="border: 0;">
									<a href="index.php"><button type="button" class="btn btn-primary">ปิด</button></a>
								</div>
							</div>
						</div>
					</div>
								
		</font-content>
		</div>
	</div>
	<?php
	require("Factor/ScrollTop121102.php");
	?>
					
	<?php
	require("Factor/Footer121102.php");
	?>
<script>
	$(document).ready(function() {
		$(".delf").click(function() {
			$("#for").hide();

		});
		$(".delr").click(function() {
			$("#rain").hide();

		});

	});
</script>

</body>

</html>