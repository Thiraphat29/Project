<?php
if (isset($_POST['input_uname']) && isset($_POST['input_email'])) :
    require("conect.php");
    $sql = "INSERT INTO customer (c_Fname,c_Uname,c_email,c_password,c_address,c_providecode) 
		VALUES (:c_Fname,:c_Uname,:c_email,md5(:c_password),:c_address,:c_providecode)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':c_Fname', $_POST['input_fname']);
    $stmt->bindParam(':c_Uname', $_POST['input_uname']);
    $stmt->bindParam(':c_email', $_POST['input_email']);
    $stmt->bindParam(':c_password', $_POST['pass_word']);
    $stmt->bindParam(':c_address', $_POST['address']);
    $stmt->bindParam(':c_providecode', $_POST['postzip']);
    if ($stmt->execute()) :
        $message = 'Successfully add new customer';
    else :
        $message = 'Fail to add new customer';
    endif;
    $conn = null;
endif;
?>
?>

<html>

<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="/css/Add.css">
</head>

<body>
    <h1>Add Customer</h1>
    <form action="Addcustomer.php" method="POST">
        <input type="text" placeholder="Enter Customer ID" name="input_fname">
        <br>
        <br>
        <input type="text" placeholder="Name" name="input_uname">
        <br>
        <br>
        <input type="date" placeholder="Birthdate" name="birthdate">
        <br>
        <br>
        <input type="email" placeholder="Email" name="input_email">
        <br>
        <br>
        <input type="text" placeholder="Country code" name="pass_word">
        <br>
        <br>
        <input type="text" placeholder="OutStanding debt" name="address">
        <br>
        <br>
        <input type="text" placeholder="OutStanding debt" name="postzip">

        <input type="submit">
    </form>
</body>

</html>