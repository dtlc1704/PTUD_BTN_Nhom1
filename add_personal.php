<?php include 'db.php'; ?> 

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Thông Tin Cá Nhân</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 25px 35px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            text-align: center;
            color: #000000;
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input, textarea, button {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 1px solid #54a7bf;
            border-radius: 5px;
            outline: none;
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus {
            border-color: #54a7bf;
            box-shadow: 0 0 5px rgba(84, 167, 191, 0.8);
        }

        textarea {
            resize: none;
            height: 100px;
        }

        button {
            background-color: #54a7bf;
            color: #ffffff;
            border: none;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #3b8ea5; /* Màu khi hover */
            transform: scale(1.05);
        }

        button:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thêm Thông Tin Cá Nhân</h1>
        <form action="insert_personal.php" method="POST">
            <input type="text" name="full_name" placeholder="Họ tên" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Điện thoại" required>
            <input type="text" name="address" placeholder="Địa chỉ" required>
            <textarea name="description" placeholder="Mô tả ngắn về bản thân"></textarea>
            <button type="submit">Thêm</button>
        </form>
    </div>
</body>
</html>
