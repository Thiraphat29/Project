<html>
<?php session_start(); ?>

<head>
    <link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" />
    <!--- ไอคอนบนหน้าเว็บ --->
    <title>Proflie · TZS Online</title>
    <?php
    require("Factor/BoStCSS121102.php"); ?>


</head>

<body class="body-style">
    <?php
    require("Factor/NavBar121102.php");

    ?>
    <div class="SpaceStyle"></div>

    <div class="container">
        <font-content>
            <div class=row>

                <div class="col-lg-12 ColContentSetting">
                    <div class="card CardBGSetting">
                        <!----- Start พื้นหลัง ----->
                        <div class="card-body CardBodyBGSetting">
                            <!----- Start ชิ้นส่วนพื้นหลัง ----->
                            <div class="card CardContentBGSetting" style="margin-bottom: 0">
                                <div class="card-body CardBodyContentBGSetting">
                                    <form>

                                        <div class="form-group">
                                            <h2>Profile</h2>
                                        </div>
                                        <br>
                                        <img src="image/avatar/aa1.jpg" width='235px' ,height='240px'>
                                        <div>
                                            <br>
                                            <h3>ชื่อผู้ใช้:<?php echo $_SESSION["c_Uname"]; ?></h3>
                                        </div>
                                        <div>
                                            <br>
                                            <h3>ชื่อจริง:<?php echo $_SESSION["c_Fname"]; ?></h3>
                                        </div>
                                        <div>
                                            <br>
                                            <h3>EMAIL:<?php echo $_SESSION["c_email"]; ?></h3>
                                        </div>
                                        <div>
                                            <br>
                                            <h3>ที่อยู่:<?php echo $_SESSION["c_address"]; ?></h3>
                                        </div>
                                        <div>
                                            <br>
                                            <h3>รหัสไปรษณีย์:<?php echo $_SESSION["c_providecode"]; ?></h3>
                                        </div>



                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-------------------------------------------------------------------------------------------------->
            </div>
            <?php
            require("Factor/ScrollTop121102.php");
            ?>
        </font-content>
    </div><?php
            require("Factor/Footer121102.php");
            ?>
</body>

</html>