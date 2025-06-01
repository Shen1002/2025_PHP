<?php
session_start();
if(isset($_SESSION["check"])){
    echo "Welcome user<br>";
    echo "<a href = 'logout.php'>logout</a>";
}elseif(isset($_SESSION["admin"])){
    echo "Welcome admin<br>";
    echo "<a href = 'logout.php'>logout</a>";
}
else{
    echo "ileagle user";
    header("Refresh:3;url='login.php'");
}
?>