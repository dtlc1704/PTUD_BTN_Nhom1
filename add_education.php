<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Học Vấn</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9; /* Màu nền tổng thể */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Chiều cao full màn hình */
        }

        .container {
            background-color: #ffffff; /* Nền form */
            padding: 25px 35px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Hiệu ứng đổ bóng */
            width: 100%;
            max-width: 500px; /* Chiều rộng tối đa của form */
        }

        h1 {
            text-align: center;
            color: #000000; /* Tiêu đề màu đen */
            font-size: 24px;
            margin-bottom: 20px; /* Khoảng cách dưới tiêu đề */
        }

        form {
            display: flex;
            flex-direction: column; /* Sắp xếp cột dọc */
            gap: 15px; /* Khoảng cách giữa các trường */
        }

        input, textarea, button {
            width: 100%; /* Căn đều chiều rộng */
            padding: 12px;
            font-size: 14px;
            border: 1px solid #54a7bf; /* Viền */
            border-radius: 5px;
            outline: none;
            transition: all 0.3s ease; /* Hiệu ứng mượt */
        }

        input:focus, textarea:focus {
            border-color: #54a7bf;
            box-shadow: 0 0 5px rgba(84, 167, 191, 0.8); /* Hiệu ứng khi focus */
        }

        textarea {
            resize: none; /* Vô hiệu hóa thay đổi kích thước */
            height: 100px; /* Đặt chiều cao cố định */
        }

        button {
            background-color: #54a7bf; /* Nền nút */
            color: #ffffff; /* Màu chữ */
            border: none;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase; /* Chữ in hoa */
            transition: background-color 0.3s ease, transform 0.2s ease; /* Hiệu ứng hover */
        }

        button:hover {
            background-color: #3b8ea5; /* Nền khi hover */
            transform: scale(1.05); /* Tăng nhẹ kích thước */
        }

        button:active {
            transform: scale(0.98); /* Thu nhỏ khi bấm */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thêm Học Vấn</h1>
        <form action="insert_education.php" method="POST">
            <input type="text" name="school_name" placeholder="Tên trường" required>
            <input type="text" name="major" placeholder="Chuyên ngành" required>
            <input type="text" name="study_period" placeholder="Thời gian học" required>
            <textarea name="description" placeholder="Mô tả thêm"></textarea>
            <button type="submit">Thêm</button>
        </form>
    </div>
</body>
</html>
