<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Trang Điểm</title>
</head>
<body>
<div id="header">
    <h2>DANH SÁCH ĐIỂM SINH VIÊN</h2>
</div>
<div id="link">
    <a href="./PointController/ShowformCreat">Add Point</a>
    <a href="./PointController/ShowformUpdate">Update Point</a>
    <a href="./PointController/ShowformDelete">Delete Point</a>
</div>
<table class="tablediemthi">
        <tr>
            <th>Mã sinh viên</th>
            <th>Mã môn học</th>
            <th>Điểm</th>
            <th>Lần thi</th>
        </tr>
        <tr>
        <?php
            foreach ($data["array"] as $row){
                echo "
                    <tr>
                    <td>".$row["masv"]."</td>
                    <td>".$row["mamh"]."</td>
                    <td>".$row["diemso"]."</td>
                    <td>".$row["lanthi"]."</td>
                    </tr>";}
        ?>
        </tr>
</table>
</body>
</html>