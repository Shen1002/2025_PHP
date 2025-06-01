<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file</title>
</head>
<body>
    <?php
    if ( file_exists("pic\\test.png") ){
        echo '<img src="pic\\test.png" width = 10%>';
    }
    else{
        print "檔案.php 不存在<br/>";
    }
    ?>
    <form action = "confirm.php" method = "post" enctype = "multipart/form-data">
        <input type = "file" name = "file"><br/>

        <input type = "submit">
    </form>
</body>
</html>