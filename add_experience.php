<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Kinh Nghiệm</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9; /* Nền chính */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff; /* Nền form */
            padding: 25px 35px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px; /* Giới hạn chiều rộng form */
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
            gap: 15px; /* Khoảng cách giữa các trường */
        }

        input, textarea, button {
            width: 100%; /* Căn đều chiều dài */
            padding: 12px;
            font-size: 14px;
            border: 1px solid #54a7bf; /* Viền chính */
            border-radius: 5px;
            outline: none;
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus {
            border-color: #54a7bf;
            box-shadow: 0 0 5px rgba(84, 167, 191, 0.8);
        }

        textarea {
            resize: none; /* Vô hiệu hoá thay đổi kích thước */
            height: 100px; /* Đặt chiều cao cố định */
        }

        button {
            background-color: #54a7bf; /* Nền chính của nút */
            color: #ffffff; /* Màu chữ */
            border: none;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #3b8ea5; /* Màu nền khi hover */
            transform: scale(1.05); /* Phóng to nhẹ khi di chuột */
        }

        button:active {
            transform: scale(0.98); /* Nhỏ lại khi nhấn */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thêm Kinh Nghiệm Làm Việc</h1>
        <form action="insert_experience.php" method="POST">
            <input type="text" name="company_name" placeholder="Tên công ty" required>
            <input type="text" name="position" placeholder="Vị trí" required>
            <input type="text" name="work_period" placeholder="Thời gian làm việc" required>
            <textarea name="job_description" placeholder="Mô tả công việc"></textarea>
            <button type="submit">Thêm</button>
        </form>
    </div>
</body>
</html>
