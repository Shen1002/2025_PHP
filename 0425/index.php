<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>使用者註冊</title>
</head>
<body>
    <h2>註冊表單</h2>
    <form action="mailer.php" method="post" enctype="multipart/form-data">
        <label>Name: <input type="text" name="name" required></label><br><br>
        <label>Email: <input type="email" name="email" required></label><br><br>
        <label>Photo: <input type="file" name="photo" accept="image/*" required></label><br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
