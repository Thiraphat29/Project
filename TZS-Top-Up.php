<html>
<?php session_start(); ?>
<head>
<link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" /> <!--- ไอคอนบนหน้าเว็บ ---> 
<title>เติมเงิน · TZS Online</title>
<script type="text/javascript" src='https://www.tmtopup.com/topup/3rdTopup.php?uid=223088'></script>
	<?php
		require("Factor/BoStCSS121102.php");
	?>
	
	<style>
		.CardBGForTopUp {
			background-color: #232323;
			padding: 9px;
			margin-bottom: 0px;
		}
		
		.BorderForCardBody {
			
		}
	</style>
	
	<script type="text/javascript">
		$(function(){

			$("#filepicture").on("change",function(){
				var _fileName = $(this).val();
				_fileName = (_fileName)?_fileName:"Choose file";
				$(this).next("label").text(_fileName);
			});

		});
	</script>
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
						<li class="breadcrumb-item active" aria-current="page">เติมเงิน</li>
  					</ol>
				</nav>
				<!---------------------- เนื้อหา --------------------->
				<div class="card CardBGSetting"> <!----- Start พื้นหลัง ----->
					<div class="card-body CardBodyBGSetting"><!----- Start ชิ้นส่วนพื้นหลัง ----->
						
						<div class="accordion" id="accordionExample">
							<!---------------------- True Money --------------------->
							  <div class="card CardBGForTopUp">
								<div class="card-header" id="headingOne">
								  <h2 class="mb-0">
									<button class="btn btn-lg btn-outline-light collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									  เติมเงินโดยใช้บัตรเงินสดทรูมันนี่
									</button>
								  </h2>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								  <div class="card-body" align="center">
									<form>
										<div style="margin-top: 20px; margin-bottom: 20px;" align="center">
											<img class="PayWay" src="image/Footer/TrueMoneyCode.png?v=<?php echo filemtime('image/Footer/TrueMoneyCode.png'); ?>" alt="TrueMoney">
										</div>
										
										<p style="max-width: 400px; font-size: 18px" align="left">รหัสบัตรเงินสดทรูมันนี่ 14 หลัก
											<input class="form-control" placeholder="รหัสบัตรเงินสดทรูมันนี่ 14 หลัก" name="tmn_password" type="text" id="tmn_password" maxlength="14" />
										</p>

										<p style="max-width: 400px; font-size: 18px" align="left">ชื่อ-นามสกุล
											<input class="form-control" placeholder="ชื่อ-นามสกุล" name="ref1" type="text" id="ref1" />
										</p>

										<p style="max-width: 400px; font-size: 18px" align="left">อีเมล
											<input class="form-control" placeholder="อีเมลที่สมัครกับ TZS Online" name="ref2" type="text" id="ref2" />
										</p>

										<p style="max-width: 400px; font-size: 18px" align="left">เบอร์โทรศัพท์
											<input class="form-control" placeholder="เบอร์โทรศัพท์ที่สามารถติดต่อได้" name="ref3" type="text" id="ref3" />
										</p>
										
										<p style="max-width: 400px; font-size: 18px">
										<input type="button" class="btn btn-block btn-lg btn-success" value="เติมเงิน !" onclick="submit_tmnc()" />
										<p align="right">Powered By <a href="https://www.tmtopup.com/" target="_blank">TMTOPUP.com</a></p>
										</p>
									</form>
								  </div>
								</div>
							  </div>
						<!------------------------ โอนเงินผ่านบัญชีธนาคาร ------------------------>
							  <div class="card CardContentBGSetting">
								<div class="card-header" id="headingTwo">
								  <h2 class="mb-0">
									<button class="btn btn-lg btn-outline-light collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  เติมเงินโดยโอนผ่านบัญชีธนาคาร
									</button>
								  </h2>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								  <div class="card-body" align="center">
									
										<div style="margin-top: 20px; margin-bottom: 20px;" align="center">
											<div class="row">
												<div class="col-lg-6">
													<img class="ImgResponsive" style="margin: 5px" src="image/TopUp/KBankAcc.png" alt="KBank"></a>
												</div>
												<div class="col-lg-6">
													<img class="ImgResponsive" style="margin: 5px" src="image/TopUp/KTBAcc.png" alt="KTB"></a>
									  			</div>
									  		</div>
										</div>
										<p align="center" style="max-width: 500px; border-style: solid; border-color: red;">โปรดโอนยอดเงินพร้อมเศษสตางค์ เช่น 500.01 บาท เพื่อป้องกันยอดเงินซ้ำกับผู้ใช้อื่น ส่งผลให้คุณไม่สามารถแจ้งการโอนเงินได้</p>
								  	<form>
										<h3>แจ้งการโอนเงิน</h3>
										
										<div class="form-group" style="max-width: 400px;" align="left">
    										<label for="exampleFormControlSelect1" style="font-size: 18px; margin-bottom: 0">ช่องทาง</label>
												<div class="form-group">
													<select class="form-control">
													  <option>ตู้เอทีเอ็ม</option>
													  <option>แอพพลิเคชั่นของธนาคาร</option>
													  <option>ทำรายการที่สาขา</option>
													  <option>เครื่องรับฝากอัตโนมัติ</option>
													</select>
												</div>
										</div>

										<div class="form-group" style="max-width: 400px;" align="left">
    										<label for="exampleFormControlSelect1" style="font-size: 18px; margin-bottom: 0">ธนาคารที่ทำรายการ</label>
												<div class="form-group">
													<select class="form-control">
													  <option>ธนาคาร กสิกรไทย</option>
													  <option>ธนาคาร กรุงไทย</option>
													</select>
												</div>
										</div>

										<p style="max-width: 400px; font-size: 18px" align="left">วันที่โอนเงิน
											<input class="form-control" placeholder="02/09/2562" type="text" />
											<small class="form-text text-muted">
												โปรดใส่ตัวเลข 2 หลัก เช่น 02/09/2562 (ใช้ พ.ศ.)
											</small>
										</p>
										
										<p style="max-width: 400px; font-size: 18px" align="left">เวลาที่โอนเงิน
											<input class="form-control" placeholder="13.02" type="text" />
											<small class="form-text text-muted">
												โปรดใส่ตัวเลข 2 หลัก เช่น 13.02 (ใช้รูปแบบ 24 ชั่วโมง)
											</small>
										</p>
										
										<p style="max-width: 400px; font-size: 18px" align="left">จำนวนเงินที่โอน
											<input class="form-control" placeholder="" type="text" />
											<small class="form-text text-muted">
												ใส่เฉพาะจำนวนเงิน โดยไม่ใส่คำว่า "บาท" ต่อท้าย
											</small>
										</p>
										
										<div class="form-group" style="max-width: 400px;" align="left">
											<label for="" style="font-size: 18px; margin-bottom: 0">หลักฐานการโอนเงิน</label>
											<div class="custom-file">
												<input type="file" name="filepicture" id="filepicture" class="custom-file-input">
												<label class="custom-file-label" for="filepicture">เลือกไฟล์</label>
											</div>
										</div> 
										
										<p style="max-width: 400px">
											<input type="button" class="btn btn-block btn-lg btn-success" value="แจ้งการโอนเงิน"/>
										</p>
									</form>
								  </div>
								</div>
							  </div>
						<!------------------------ โอนเงินผ่านบัญชีพร้อมเพย์ ------------------------>
<!--
							  <div class="card CardContentBGSetting">
								<div class="card-header" id="headingThree">
								  <h2 class="mb-0">
									<button class="btn btn-lg btn-outline-light collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									  เติมเงินโดยโอนผ่านบริการพร้อมเพย์
									</button>
								  </h2>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								  <div class="card-body">
									<form>
										<div style="margin-top: 20px; margin-bottom: 20px;" align="center">
											<img class="PayWay" src="image/Footer/PromptPay.png?v=<?php echo filemtime('image/Footer/PromptPay.png'); ?>" alt="PromptPay">
										</div>
									</form>
								  </div>
								</div>
							  </div>
-->
						<!---------------------- ---------- --------------------->
						</div>
					</div>
				</div>
				<!---------------------- สิ้นสุดเนื้อหา --------------------->
			</div>
		</div>
		<?php
			require("Factor/ScrollTop121102.php");
		?>
	</font-content>
</div>
	<?php
		require("Factor/Footer121102.php");
	?>
</body>
</html>