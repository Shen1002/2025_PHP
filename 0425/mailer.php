<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊</title>
</head>
<body>
<?php
$host = 'localhost';
$db = 'register';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("資料庫連線失敗: " . $conn->connect_error);
}

$name = $_POST["name"];
$email = $_POST["email"];
$subject = "註冊成功通知";


$uploadDir = "uploads/";
$filename = $name . "_" . time() . ".png";
$filepath = $uploadDir . $filename;

if (copy($_FILES["photo"]["tmp_name"], $filepath)) {
    echo "檔案上傳成功<br/>";
    unlink($_FILES["photo"]["tmp_name"]);
} else {
    echo "檔案上傳失敗<br/>";
    exit;
}

$stmt = $conn->prepare("INSERT INTO users (name, email, photo) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $filepath);
$stmt->execute();
$stmt->close();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'a1103210@mail.nuk.edu.tw';
    $mail->Password   = 'udjo fnvg byja zzou';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('a1103210@mail.nuk.edu.tw', 'Mailer');
    $mail->addAddress($email);

    $mail->Charset = "UTF-8"; 
    $subject = "=?UTF-8?B?" . base64_encode($subject) . "?=";
    $mail->isHTML(true);
    $mail->Subject = $subject;

    $imgUrl = 'http://' . $_SERVER['HTTP_HOST'] . '\2025_PHP\0425' . $filepath;
    //路徑需更改為本地路徑
    $mail->Body = "
        <h2>使用者 $name ，您已註冊成功！</h2>
        <p>以下是您上傳的圖片：</p>
        <img src='$imgUrl' width='200'>
    ";

    $mail->send();
    echo '註冊成功，信件已寄出';
    echo $imgUrl;
} catch (Exception $e) {
    echo "寄送失敗，錯誤: {$mail->ErrorInfo}";
}
?>
</body>
</html>
