<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo "檔案名稱: ".$_FILES["file"]["name"]."<br/>";
    echo "暫存檔名: ".$_FILES["file"]["tmp_name"]."<br/>";
    echo "檔案尺寸: ".$_FILES["file"]["size"]."<br/>";
    echo "檔案種類: ".$_FILES["file"]["type"]."<hr/>";
    $time = time();
    $Filename = "pic\\".$time.".png";
    if (copy($_FILES["file"]["tmp_name"],$Filename)) {
        echo "檔案上傳成功<br/>";
        unlink($_FILES["file"]["tmp_name"]);
    }
    else
        echo "檔案上傳失敗<br/>";

    ?>
</body>
</html>