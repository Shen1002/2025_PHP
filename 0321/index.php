<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',  // 密碼
        'user');  // 預設使用的資料庫名稱
    if ( !mysqli_select_db($link, 'user') )
        die("無法開啟資料庫!<br/>");
    else
        echo "資料庫開啟成功!<br/>";
        $sql = "SELECT * FROM info";
        mysqli_set_charset($link, 'utf8');
        if( $result = mysqli_query($link, $sql) ) {
            echo "<table>"
            while( $row = mysqli_fetch_assoc($result) ){
                
                echo $row["No"]."-".$row["name"]."-".$row["adress"]."-".$row["birthday"]."<br/>";
            }
            echo "</table>"
        }
    ?>
</body>
</html>