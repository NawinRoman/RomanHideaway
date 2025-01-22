<!-- login.php -->
<?php
session_start(); // เริ่ม session

// กำหนดรหัสผ่านที่ต้องการ
$correct_password = "338"; 

// ตรวจสอบว่าแบบฟอร์มได้ถูกส่งหรือยัง
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];

    // ตรวจสอบรหัสผ่าน
    if ($password === $correct_password) {
        $_SESSION['loggedin'] = true; // ถ้ารหัสถูกต้องให้ตั้ง session
        header("Location: index.php"); // เปลี่ยนไปยังหน้า index.php
        exit;
    } else {
        $error_message = "ไม่ถูกไอควาย!";
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Roman Hideaway - Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #2c2c2c;
            color: white;
        }

        .login-container {
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            background-color: #333;
        }

        input {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            max-width: 300px;
            box-sizing: border-box;
            background-color: #555;
            color: white;
            border: 1px solid #777;
        }

        button {
            padding: 8px;
            background-color: #777;
            color: white;
            border: 1px solid #777;
            cursor: pointer;
        }

        button:hover {
            background-color: #999;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Gate</h2>
        <form method="POST" action="login.php">
            <input type="password" id="password" name="password" placeholder="รหัสลับอะไรเอ่ย" required>
            <br><br>
            <button type="submit">ก๊อกๆ</button>
            <p id="errorMessage" class="error"><?php echo isset($error_message) ? $error_message : ''; ?></p>
        </form>
    </div>
</body>
</html>
