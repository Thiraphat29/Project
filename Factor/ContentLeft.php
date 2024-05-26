<?php
?>
<html>

<head>
    <title>HOME</title>
</head>

<body>
    <div class="card CardBGSetting">
        <div class="card-body CardBodyBGSetting">
            <div class="card CardContentBGSetting">
                <div class="card-body CardBodyContentBGSetting ZeroMarginPadding">
                    <?php if (isset($_SESSION['c_email'])) { ?>
                        <form>
                            <div>
                                <h2>Profile</h2>
                            </div>
                            <br>
                            <img src="image/avatar/aa1.jpg" width='220px' , height='200px'>
                            <div>
                                <br>
                                <div>ชื่อผู้ใช้:<?php echo  $_SESSION['c_Uname']; ?></div>
                            </div>
                            <div>
                                <br>
                                <div>ชื่อจริง:<?php echo  $_SESSION['c_Fname']; ?></div>
                            </div>
                            <div>
                                <br>
                                <div>EMAIL:<?php echo  $_SESSION['c_email']; ?></div>
                            </div>
                            <div>
                                <br>
                                <div>ที่อยู่:<?php echo  $_SESSION['c_address']; ?></div>
                            </div>
                            <div>
                                <br>
                                <?php if (isset($_SESSION['c_providecode'])) { ?>
                                    <div>รหัสไปรษณีย์:<?php echo  $_SESSION['c_providecode']; ?></div>
                                <?php } ?>
                            </div>
                            <p><button type='button' class='btn btn-outline-info btn-block' data-toggle='modal' data-target='#HistoryDetail'>ประวัติการสั่งซื้อ</button></p>
                            <a href="logout.php"> <button type='button' link class='btn btn-block btn-me btn-outline-danger'>ออกจากระบบ</button></a>
                        </form>
                    <?php } else { ?>
                        <form id="LoginForm" action="ContentLeft.php" method="POST">
                            <h3 align="center">เข้าสู่ระบบ</h3>
                            <a href="login.php"><input type="but" class="btn btn-lg btn-success btn-block LoginBT" id="login" value=" เข้าสู่ระบบ"></a>
                            <p></p>
                            <div class="row">
                                <div class="col-6 RegisterBT">
                                    <a href="Register.php"><button type="button" class="btn btn-outline-primary btn-block btn-me">สมัครสมาชิก</button></a>
                                </div>
                                <div class="col-6 ForgetPasswordBT">
                                    <button type="button" class="btn btn-block btn-me btn-outline-warning">
                                        ลืมรหัสผ่าน?
                                    </button>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
            <p></p>
            <div style="margin-bottom: 10px">
                <img class="ImgResponsive" src="image\ContentLeft\danger1.png" alt="danger1">
            </div>
           
        </div>
    </div>
    <?php
    require("Factor/BuyHistory121102.php");
    ?>
</body>

</html>
