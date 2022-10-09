<html>
<head><meta charset = "UTF-8"></head>
<body>

<form action = "insert-member.php" method="post">
    Username: <input type = "text" name = "username"><br><br>
    รหัสผ่าน: <input type = "password" name = "password"><br><br>
    ชื่อ: <input type = "text" name = "name"><br><br>
    ที่อยู่:
    <br> <textarea name = "address" rows="3" cols="40"></textarea><br><br>
    เบอร์โทร: <input type = "text" name = "mobile" pattern = "[0-9]{10}" title = "Please try again"><br><br>
    อีเมล: <input type = "text" name = "email"><br><br>
    <input type = "submit" value="เพิ่ม">
</form>
</body>
</html>