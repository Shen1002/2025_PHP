<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>報名資訊</title>
        <style>
            table {
                width: 80%;
                border-collapse: collapse;
                margin-top: 10px;
            }
            td {
                padding: 10px;
                border: 1px solid #000000;
            }
            input, textarea {
                width: 100%;
                padding: 8px;
                margin-top: 5px;
                border: 1px solid #000000;
                border-radius: 5px;
            }
        </style>
    </head>

    <body bgcolor="#33D7DA" text="#13537E">
    <h1>報名資訊</h1>
    <table border="1" aria-setsize="50%">
        <thead>
            <tr>
                <td>欄位</td>
                <td>內容</td>
            </tr>
        </thead>
        
        <tbody>
        <tr>
            <td>場次</td>
            <td><?php echo $_GET["time"]; ?></td>
        </tr>
        <tr>
            <td>姓名</td>
            <td><?php echo $_GET["student_name"]; ?></td>
        </tr>
        <tr>
            <td>學號</td>
            <td><?php echo $_GET["student_id"]; ?></td>
        </tr>
        <tr>
            <td>連絡電話</td>
            <td><?php echo $_GET["email"]; ?></td>
        </tr>
        <tr>
            <td>電子郵件</td>
            <td><?php echo $_GET["phone"]; ?></td>
        </tr>
        </tbody>
    </table>
    <h1>以上為您的報名資訊，確認無誤後即可關閉網頁，若有誤則點選下方連結重新填寫</h1>
    <a href="form.html">回到迎新活動表單</a>
    <h1>感謝您的報名，稍後將與您聯繫</h1>
    </body>
</html>
