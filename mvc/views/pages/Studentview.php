<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
<div id="header">
    <h2>DANH SÁCH SINH VIÊN</h2>
</div>
<div id="link">
   <a href="./StudentController/ShowformCreat">Add Student</a>
   <a href="./StudentController/ShowformUpdate">Update Student</a>
   <a href="./StudentController/ShowformDelete">Delete Student</a>
</div>
<table class="tablesinhvien">
        <tr>
            <th>Mã sinh viên</th>
            <th>Họ và Tên</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
        </tr>
        <tr>
        <?php
            foreach ($data["array"] as $row){
                echo "
                    <tr>
                    <td>".$row["masv"]."</td>
                    <td>".$row["hoten"]."</td>
                    <td>".$row["sdt"]."</td>
                    <td>".$row["diachi"]."</td>
                    </tr>";}
        ?>
        </tr>
</table>
</body>
</html>