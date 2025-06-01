<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $defaultName = "nuk";
    $defaultPwd = "123";
    $adminName = "admin";
    $adminPwd = "123";
    $userName = $_POST["userName"];
    $userPwd = $_POST["userPwd"];
    

    if($userName == $defaultName && $userPwd == $defaultPwd){
        echo "successed";
        $_SESSION["check"] = 1;
        $cookiedate = strtotime("+10 seconds",time());
        setcookie("userName",$defaultName, $cookiedate);
        header("Location:info.php");
    }
    elseif($userName == $adminName && $userPwd == $adminPwd){
        echo "successed";
        $_SESSION["admin"] = 1;
        header("Location:info.php");
    }
    else{
        echo "failed";
        header("Refresh:3;url='login.php'");
    }

    ?>
</body>
</html>