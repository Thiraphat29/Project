<?PHP
session_start();
require("conect.php");
session_destroy();
header('refresh:0 url=index.php');
