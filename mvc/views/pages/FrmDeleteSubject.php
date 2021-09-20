<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/add.css">
    <title>Trang Xóa Môn Học</title>
</head>
<body>
<div class="formsinhvien">
    <div class=head>
        <h2>Delete Subject</h2>
        <hr />
    </div>
    <form class="form" action="./SubjectController/DeleteSubject" method="post">
        <div class="frm">
            <label>ID Subject</label>
            <input type="text" name="idsb" placeholder="ID Subject">
        </div>
        <div class="button">
            <button style="font-weight:600;" class="btn" type="submit">Delete</button>
        </div>
    </form>
</div>
</body>
</html>