<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>CV Cá Nhân 1</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.delete-btn').click(function(){
            return confirm("Bạn có chắc chắn muốn xóa không?");
        });
    });
    </script>
</head>
<body>
    <h1>Thông tin cá nhân</h1>
    <a href="add_personal.php">Thêm mới thông tin cá nhân</a>
    <br><br>

    <?php
    $result = $conn->query("SELECT * FROM personal_info");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p>Họ tên: " . $row["full_name"] . "</p>";
            echo "<p>Email: " . $row["email"] . "</p>";
            echo "<p>Điện thoại: " . $row["phone"] . "</p>";
            echo "<p>Địa chỉ: " . $row["address"] . "</p>";
            echo "<p>Mô tả: " . $row["description"] . "</p>";
            echo '<a href="edit_personal.php?id=' . $row['id'] . '">Chỉnh sửa</a> | ';
            echo '<a href="delete_personal.php?id=' . $row['id'] . '" class="delete-btn">Xóa</a>';
            echo "<hr>";
        }
    } else {
        echo "<p>Chưa có thông tin cá nhân.</p>";
    }
    ?>

    <h2>Kinh nghiệm làm việc</h2>
    <a href="add_experience.php">Thêm mới kinh nghiệm làm việc</a>
    <br><br>
    <?php
    $result = $conn->query("SELECT * FROM experience");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p>Công ty: " . $row["company_name"] . ", Vị trí: " . $row["position"] . ", Thời gian: " . $row["work_period"] . "</p>";
            echo "<p>Mô tả: " . $row["job_description"] . "</p>";
            echo '<a href="edit_experience.php?id=' . $row['id'] . '">Chỉnh sửa</a> | ';
            echo '<a href="delete_experience.php?id=' . $row['id'] . '" class="delete-btn">Xóa</a>';
            echo "<hr>";
        }
    } else {
        echo "<p>Chưa có kinh nghiệm làm việc.</p>";
    }
    ?>

    <h2>Học vấn</h2>
    <a href="add_education.php">Thêm mới học vấn</a>
    <br><br>
    <?php
    $result = $conn->query("SELECT * FROM education");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p>Trường: " . $row["school_name"] . ", Chuyên ngành: " . $row["major"] . ", Thời gian: " . $row["study_period"] . "</p>";
            
            echo '<a href="edit_education.php?id=' . $row['id'] . '">Chỉnh sửa</a> | ';
            echo '<a href="delete_education.php?id=' . $row['id'] . '" class="delete-btn">Xóa</a>';
            echo "<hr>";
        }
    } else {
        echo "<p>Chưa có thông tin học vấn.</p>";
    }
    ?>


    <h2>Kỹ Năng</h2>
    <a href="add_skills.php">Thêm mới kỹ năng</a>
    <br><br>
    <?php
    $result = $conn->query("SELECT * FROM skills");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p>Tên kỹ năng: " . $row["skill_name"] . ", Mức độ: " . $row["proficiency"] . "</p>";
            echo '<a href="edit_skills.php?id=' . $row['id'] . '">Chỉnh sửa</a> | ';
            echo '<a href="delete_skills.php?id=' . $row['id'] . '" class="delete-btn">Xóa</a>';
            echo "<hr>";
        }
    } else {
        echo "<p>Chưa có thông tin kỹ năng.</p>";
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $('.delete-btn').click(function(){
        return confirm("Bạn có chắc chắn muốn xóa không?");
    });
});
</script>


</body>
</html>
