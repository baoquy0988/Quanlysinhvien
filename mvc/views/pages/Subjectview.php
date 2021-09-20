<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Trang Môn Học</title>
</head>
<body>
<div id="header">
    <h2>DANH SÁCH MÔN HỌC SINH VIÊN</h2>
</div>
<div id="link">
    <a href="./SubjectController/ShowformCreat">Add Subject</a>
    <a href="./SubjectController/ShowformUpdate">Update Subject</a>
    <a href="./SubjectController/ShowformDelete">Delete Subject</a>
</div>
<table class="tablemonhoc">
        <tr>
            <th>Mã môn học</th>
            <th>Tên môn học</th>
            <th>Số tín chỉ</th>
        </tr>
        <tr>
        <?php
            foreach ($data["array"] as $row){
                echo "
                    <tr>
                    <td>".$row["mamh"]."</td>
                    <td>".$row["tenmonhoc"]."</td>
                    <td>".$row["sotinchi"]."</td>
                    </tr>";}
        ?>
        </tr>
</table>
</body>
</html>