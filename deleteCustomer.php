<!DOCTYPE html>
<html>

<head>
    <title>Dlete Selected Customer Information</title>
</head>

<body>
    <?php
    require("conect.php");

    $sql = "SELECT * FROM customer where c_email =:c_email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':c_email', $_GET['c_email']);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql = "INSERT INTO oldcustomer (c_Fname,c_Uname,c_email,c_password,c_address,c_providecode,stat_admin) 
    VALUES (:c_Fname,:c_Uname,:c_email,:c_password,:c_address,:c_providecode,:stat_admin)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':c_Fname', $result['c_Fname']);
    $stmt->bindParam(':c_Uname', $result['c_Uname']);
    $stmt->bindParam(':c_email', $result['c_email']);
    $stmt->bindParam(':c_password', $result['c_password']);
    $stmt->bindParam(':c_address', $result['c_address']);
    $stmt->bindParam(':c_providecode', $result['c_providecode']);
    $stmt->bindParam(':stat_admin', $result['stat_admin']);
    $stmt->execute();


    $sqls = "DELETE FROM customer WHERE c_email = :c_email";
    $stmt = $conn->prepare($sqls);
    $stmt->bindParam(':c_email', $_GET['c_email']);

    if ($stmt->execute()) :
        $message = 'Successfully delete customer' . $_GET['c_email'];
    else :
        $message = 'Fail to delete customer information.';
    endif;
    echo "<br>" . $message;

    $conn = null;

    ?>
    <?php

    header('location:adminpage.php');
    ?>
</body>

</html>