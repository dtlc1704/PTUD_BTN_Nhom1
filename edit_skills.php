<?php include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM skills WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh Sửa Kỹ Năng</title>
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

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        form button {
            background-color: #6c757d;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        form button:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <h1>Chỉnh Sửa Kỹ Năng</h1>
    <form action="update_skills.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="skill_name" value="<?php echo $row['skill_name']; ?>" required><br>
        <input type="text" name="proficiency" value="<?php echo $row['proficiency']; ?>" required><br>
        <button type="submit">Cập Nhật</button>
    </form>
</body>
</html>