<html>
<?php session_start(); ?>

<head>
    <?php
    require("conect.php");
    if (isset($_POST['uname']) && isset($_POST['psw'])); {
        $email = $_POST['uname'];
        $password =  $_POST['psw'];
        $sql = "SELECT * FROM customer WHERE c_email ='" . $email . "' AND c_password='" . $password . "'";
        $result = $conn->query($sql);
        if ($result->rowCount() > 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $_SESSION['c_Uname'] = $row['c_Uname'];
            $_SESSION['c_Fname'] = $row['c_Fname'];
            $_SESSION['c_email'] = $row['c_email'];
            $_SESSION['c_address'] = $row['c_address'];
        } else {
            echo '<script> alert("ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบอีกครั้ง") </script>';
        }
    }
    ?>
</head>
<div class="card CardBGSetting">
    <!----- Start พื้นหลัง ----->
    <div class="card-body CardBodyBGSetting">
        <!----- Start ชิ้นส่วนพื้นหลัง ----->
        <!----------------- ส่วนเข้าสู่ระบบ ----------------->
        <div class="card CardContentBGSetting">
            <div class="card-body CardBodyContentBGSetting ZeroMarginPadding">

                <form id="LoginForm" action="testlogin.php" method="POST">
                    <h3 align="center">เข้าสู่ระบบ</h3>
                    <!--------------------------- ช่อง Username --------------------------->
                    <div class="form-group">
                        <label for="uname">อีเมล</label>
                        <label class="sr-only" for="inlineFormInputGroup">อีเมล</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="email" class="form-control" placeholder="อีเมล" name="uname" autocomplete="off" required>
                        </div>
                    </div>
                    <!--------------------------- ช่อง password --------------------------->
                    <div class="form-group">
                        <label for="psw">รหัสผ่าน</label>
                        <input type="password" class="form-control" placeholder="รหัสผ่าน" name="psw" required>
                    </div>
                    <!--------------------------- ปุ่มจำรหัสผ่าน --------------------------->
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> จดจำรหัสผ่าน
                    </label>
                    <!--------------------------- ปุ่มเข้าสู่ระบบ --------------------------->
                    <input type="submit" class="btn btn-lg btn-success btn-block LoginBT" id="login" value=" เข้าสู่ระบบ" name="sunmit" <div class="row">
                    <!----------------------- ปุ่มสมัครสมาชิก ----------------------->
                    <div class="col-6 RegisterBT">
                        <a href="Register.php"><button type="button" class="btn btn-outline-primary btn-block btn-me">สมัครสมาชิก</button></a>
                    </div>
                    <!------------------------ ปุ่มลืมรหัสผ่าน ----------------------->
                    <div class="col-6 ForgetPasswordBT">
                        <button type="button" class="btn btn-block btn-me btn-outline-warning">
                            ลืมรหัสผ่าน?
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <!----------------- ส่วนเพิ่มเติม ----------------->
    <!-- <div class="ClockStyle SpaceStyle">
            <iframe src="http://free.timeanddate.com/clock/i6vsdg7j/n28/fc999/tc111/pc111/tt0/tb4" frameborder="0" width="210" height="34"></iframe>
        </div>

        <div style="margin-bottom: 10px">
            <img class="ImgResponsive" src="image\ContentLeft\danger1.png" alt="danger1">
        </div> -->

</div>
</div>
<table width="300" border="1">

    <tr>
        <th width="125">CustomerID</th>
        <td width="240"><?php echo  $_SESSION['c_Fname']; ?></td>
    </tr>
    <tr>
        <th width="130">Name</th>
        <td><?php echo  $_SESSION['c_Uname']; ?></td>
    </tr>
    <tr>
        <th width="130">Email</th>
        <td><?php echo  $_SESSION['c_email']; ?></td>
    </tr>

</table>
<?php
require("Factor/BuyHistory121102.php");
?>
<!-- <script>
    $(document).ready(function() {
        $("#login").click(function() {
            $("#LoginForm").html("<img src='image/avatar/aa1.jpg' width='235px',height='240px'><p><div align='center'>ยินดีต้อนรับ!</div></p><p><div align='center'>ชื่อผู้ใช้ :<?php echo $result["c_Uname"]; ?> </div></p><p><button type='button' class='btn btn-outline-info btn-block' data-toggle='modal' data-target='#HistoryDetail'>ประวัติการสั่งซื้อ</button></p><input type='submit'class='btn btn-block btn-me btn-outline-danger' value='ออกจากระบบ'>");

        });

    }); -->
<!-- </script> -->

</html>