<?php include 'db.php'; ?> 

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Kỹ Năng</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9; /* Nền chính */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff; /* Màu nền form */
            padding: 25px 35px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            text-align: center;
            color: #000000; /* Tiêu đề màu đen */
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input, button {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 1px solid #54a7bf; /* Viền chính */
            border-radius: 5px;
            outline: none;
            transition: all 0.3s ease;
        }

        input:focus {
            border-color: #54a7bf;
            box-shadow: 0 0 5px rgba(84, 167, 191, 0.8);
        }

        button {
            background-color: #54a7bf; /* Màu nền chính cho nút */
            color: #ffffff; /* Màu chữ */
            border: none;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #3b8ea5; /* Màu nền khi hover */
            transform: scale(1.05); /* Phóng to nhẹ */
        }

        button:active {
            transform: scale(0.98); /* Nhỏ lại khi nhấn */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thêm Kỹ Năng</h1>
        <form action="insert_skills.php" method="POST">
            <input type="text" name="skill_name" placeholder="Tên kỹ năng" required>
            <input type="text" name="proficiency" placeholder="Mức độ thành thạo" required>
            <button type="submit">Thêm</button>
        </form>
    </div>
</body>
</html>
