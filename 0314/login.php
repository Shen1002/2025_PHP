<?php
if(isset($_COOKIE["userName"])){
    echo "Last user:".$_COOKIE["userName"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action = "check.php" method = "post">
        username: <input type = "text" name = "userName"><br/>
        password: <input type = "password" name = "userPwd"><br/>
        <input type = "submit">
    </form>
    <?php
    date_default_timezone_set("Asia/Taipei");
    echo date("Y-m-d H:i:s");
    ?>

</body>
</html>