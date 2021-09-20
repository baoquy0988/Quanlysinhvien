<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Thêm Sinh Viên</title>
    <link rel="stylesheet" href="./public/css/add.css">
</head>
<body>
<div class="formsinhvien">
    <div class=head>
        <h2>Creat Student</h2>
        <hr />
    </div>
    <form class="form" action="./StudentController/CreatStudent" method="post">
        <div class="frm">
            <label>ID Student</label>
            <input type="text" name="idsv" placeholder="ID Student">
        </div>
        <div class="frm">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div class="frm">
            <label>Phone Number</label>
            <input type="text" name="phone" placeholder="Phone Number">
        </div>
        <div class="frm">
            <label>Address</label>
            <input type="text" name="address" placeholder="Address">
        </div>
        <div class="button">
            <button style="font-weight:600;" class="btn" type="submit">Creat</button>
        </div>
</form>
</div>
</body>
</html>