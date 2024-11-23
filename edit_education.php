<?php include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM education WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh Sửa Học Vấn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #444;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }

        form input[type="text"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        form textarea {
            resize: vertical;
            min-height: 100px;
        }

        form button {
            background-color: #17a2b8;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        form button:hover {
            background-color: #138496;
        }
    </style>
</head>
<body>
    <h1>Chỉnh Sửa Học Vấn</h1>
    <form action="update_education.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="school_name" value="<?php echo $row['school_name']; ?>" required><br>
        <input type="text" name="major" value="<?php echo $row['major']; ?>" required><br>
        <input type="text" name="study_period" value="<?php echo $row['study_period']; ?>" required><br>
        <textarea name="description"><?php echo $row['description']; ?></textarea><br>
        <button type="submit">Cập Nhật</button>
    </form>
</body>
</html>