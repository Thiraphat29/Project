<html>
<?php session_start(); ?>
<?php
require("conect.php");
$sql = "SELECT * FROM customer";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>

<head>
    <link rel="shortcut icon" icon” href="image/icon/logo-icon.ico" />
    <!--- ไอคอนบนหน้าเว็บ --->
    <title>หน้าAdmin · TZS Online</title>
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
                                    <H2>
                                        Customer </h2>
                                    <table width="800" border="2" style="border-color:red;">
                                        <tr>
                                            <th width="200">
                                                <div align="center" style="color:white;">EMAIL </div>
                                            </th>
                                            <th width="240">
                                                <div align="center" style="color:white;">Username </div>
                                            </th>
                                            <th width="120">
                                                <div align="center" style="color:white;">NAME </div>
                                            </th>
                                            <th width="120">
                                                <div align="center" style="color:white;">Status Admin</div>
                                            </th>

                                        </tr>

                                        <?php

                                        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <div align="center"><a onClick="return confirm('Do you want Delete');" href="deleteCustomer.php?c_email=<?php
                                                                                                                                                                echo $result["c_email"]; ?>"><?php echo $result["c_email"]; ?></a>
                                                </td>
                                                <td>
                                                    <div align="center" style=" color:white;"><?php echo $result["c_Uname"]; ?></div>
                                                </td>
                                                <td>
                                                    <div align=" center" style="color:white;"><?php echo $result["c_Fname"]; ?></div>
                                                </td>

                                                <th width="120">
                                                    <div align="center" style="color:white;"><?php echo $result["stat_admin"]; ?> </div>
                                                </th>
                                                <!-- button -->
                                                <td>
                                                    <div align=" center"><a onClick="return confirm('Do you want Delete');" href="deleteCustomer.php?c_email=<?php
                                                                                                                                                                    echo $result["c_email"]; ?>"><button class="btn btn-danger" type="submit">Delete</button></a>
                                                </td>
                                            </tr>

                                        <?php
                                        }
                                        ?>

                                    </table>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">
                                            <a href="promote.php"> <input class="btn btn-lg btn-success btn-block LoginBT" type="submit" value="Promote"></a>
                                        </div>
                                    </div>


                                    <?php
                                    require("conect.php");
                                    $sql = "SELECT * FROM oldcustomer";
                                    $stmt = $conn->prepare($sql);
                                    $stmt->execute();
                                    ?>
                                    <br><br>
                                    <H2>
                                        Ban Customer </h2>
                                    <table width="800" border="2" style="border-color:red;">
                                        <tr>
                                            <th width="200">
                                                <div align="center" style="color:white;">EMAIL </div>
                                            </th>
                                            <th width="240">
                                                <div align="center" style="color:white;">Username </div>
                                            </th>
                                            <th width="200">
                                                <div align="center" style="color:white;"> NAME</div>
                                            </th>
                                            <th width="120">
                                                <div align="center" style="color:white;">Status </div>
                                            </th>
                                        </tr>

                                        <?php

                                        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <div align="center" style="color:white;"> <?php echo $result["c_email"]; ?></a>
                                                </td>


                                                <td>
                                                    <div align="center" style="color:white;"><?php echo $result["c_Uname"]; ?></div>
                                                </td>
                                                <td>
                                                    <div align=" center" style="color:white;"><?php echo $result["c_Fname"]; ?></div>
                                                </td>

                                                <td>
                                                    <div align=" center" style="color:white;"><?php echo $result["stat_admin"]; ?></div>
                                                </td>
                                            </tr>

                                        <?php
                                        }
                                        ?>

                                    </table>
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