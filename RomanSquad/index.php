<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Roman Hideaway</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #2c2c2c; /* สีพื้นหลังมืด */
            color: white; /* ข้อความเป็นสีขาว */
        }

        form {
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            background-color: #333; /* ฟอร์มเป็นสีเทาเข้ม */
        }

        input, button {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            max-width: 300px;
            box-sizing: border-box;
            background-color: #555; /* สีพื้นหลังของ input และ button */
            color: white; /* ข้อความใน input และ button เป็นสีขาว */
            border: 1px solid #777;
        }

        button {
            cursor: pointer;
            background-color: #777; /* สีพื้นหลังของปุ่ม */
        }

        button:hover {
            background-color: #999; /* สีพื้นหลังของปุ่มเมื่อ hover */
        }
    </style>
</head>
<body>
    <form action="submit.php" method="POST">
        <h1>Roman Hideaway</h1>
        <label for="name_hh">ชื่อในเกม:</label><br>
        <input type="text" id="name_hh" name="name_hh" required><br><br>

        <label for="nickname">ชื่อเล่น:</label><br>
        <input type="text" id="nickname" name="nickname" required><br><br>

        <label for="email">อีเมล:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="gen">รุ่น:</label><br>
        <input type="number" id="gen" name="gen" required><br><br>

        <button type="submit">บันทึกข้อมูล</button>
    </form>
</body>
</html>
