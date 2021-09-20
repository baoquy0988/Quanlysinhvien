<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/add.css">
    <title>Trang Xóa Sinh Viên</title>
</head>
<body>
<div class="formsinhvien">
    <div class=head>
        <h2>Delete Student</h2>
        <hr />
    </div>
    <form class="form" action="./StudentController/DeleteStudent" method="post">
        <div class="frm">
            <label>ID Student</label>
            <input type="text" name="idsv" placeholder="ID Student">
        </div>
        <div class="button">
            <button style="font-weight:600;" class="btn" type="submit">Delete</button>
        </div>
    </form>
</div>
</body>
</html>