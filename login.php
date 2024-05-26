<html>
<?php session_start(); ?>
<?php
require("conect.php");
if (isset($_POST['submit'])) {
    $email = $_POST['c_email'];
    $password =  $_POST['pass_word'];
    $sql = "SELECT * FROM customer WHERE c_email ='" . $email . "' AND c_password='" . $password . "'";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $_SESSION['c_Uname'] = $row['c_Uname'];
        $_SESSION['c_Fname'] = $row['c_Fname'];
        $_SESSION['c_email'] = $row['c_email'];
        $_SESSION['c_address'] = $row['c_address'];
        $_SESSION['stat_admin'] = $row['stat_admin'];

        if ($_SESSION["stat_admin"] == "YES") {

            Header("Location: adminpage.php");
        } else if ($_SESSION["stat_admin"] == "") {

            Header("Location: index.php");
        }
    } else {
        echo '<script> alert("ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบอีกครั้ง") </script>';
    }
}
?>

<head>
    <link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" />
    <!--- ไอคอนบนหน้าเว็บ --->
    <title>หน้าหลัก · TZS Online</title>
    <?php
    require("Factor/BoStCSS121102.php");
    ?>



</head>

<body class="body-style">
    <?php
    require("Factor/NavBar121102.php");
    ?>
    <div class="container">
        <!---- แบ่งกึ่งกลางหน้า ---->


        <font-content>
            <div class=row>

                <div class="col-lg-12 ColContentSetting">
                    <div class="row">
                        <div class="col-12">
                            <div class="card CardBGSetting">
                                <!----- Start พื้นหลัง ----->
                                <div class="card-body CardBodyBGSetting">
                                    <form action="" method="POST">

                                        <div class="form-group">
                                            <h2 align="center">เข้าสู่ระบบ</h2>
                                        </div>
                                        <h5>อีเมล</h5>
                                        <input type="email" class="form-control" placeholder="ใส่อีเมลของคุณ" data-required="กรุณากรอกอีเมล" name="c_email" id="input_email" autocomplete="off" value="" required>
                                        <br><br>
                                        <h5>รหัสผ่าน</h5>
                                        <input type="password" class="form-control css-require" placeholder="ใส่รหัสผ่าน" name="pass_word" required>

                                        <label>
                                            <input type="checkbox" checked="checked" name="remember"> จดจำรหัสผ่าน
                                        </label>
                                        <br>
                                        <!--------------------------- ปุ่มเข้าสู่ระบบ --------------------------->
                                        <input type="submit" class="btn btn-lg btn-success btn-block LoginBT" id="login" value=" เข้าสู่ระบบ" name="submit">

                                        <div class="row">
                                            <!----------------------- ปุ่มสมัครสมาชิก ----------------------->
                                            <div class="col-6 RegisterBT">
                                                <a href="Register.php"><button type="button" class="btn btn-outline-primary btn-block btn-me">สมัครสมาชิก</button></a>
                                            </div>

                                            <!------------------------ ปุ่มลืมรหัสผ่าน ----------------------->
                                            <div class="col-6 ForgetPasswordBT">
                                                <button type="button" class="btn btn-block btn-me btn-outline-warning">
                                                    ลืมรหัสผ่าน?
                                                </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----- End ชิ้นส่วนพื้นหลัง ----->
                </div>
                <!----- End พื้นหลัง ----->
                <!------------------------------------------------------------------------------------->
            </div>
    </div>
    <!------------------------------------------------ End Of Content --------------------------------------------------------->
    </div>

    <!---- End แบ่งกึ่งกลางหน้า ---->

    <?php
    require("Factor/ScrollTop121102.php");
    ?>

    </font-content>


</body>

</html>