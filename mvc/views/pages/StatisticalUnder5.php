<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống Kê Điểm Dưới 5</title>
</head>
<body>
<div id="header">
    <h2>DANH SÁCH SINH VIÊN ĐIỂM DƯỚI 5</h2>
</div>
<table class="tablediemduoi5">
        <tr>
            <th>Mã sinh viên</th>
            <th>Họ và Tên</th>
            <th>Mã môn học</th>
            <th>Tên môn học</th>
            <th>Điểm số</th>
        </tr>
        <tr>
        <?php
            foreach ($data["array"] as $row){
                echo "
                    <tr>
                    <td>".$row["masv"]."</td>
                    <td>".$row["hoten"]."</td>
                    <td>".$row["mamh"]."</td>
                    <td>".$row["tenmonhoc"]."</td>
                    <td>".$row["diemso"]."</td>
                    </tr>";}
        ?>
        </tr>
</table>
</body>
</html>