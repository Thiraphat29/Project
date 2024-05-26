<html>

<head>
    <title>Mark</title>
</head>

<body>

    <?php

    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "tzs";

    $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $userPassword);
    //     if($conn)
    // {
    //     echo "database connected.";
    // }
    // else
    // {
    //     echo "database connect failed";
    // }



    ?>
</body>

</html>