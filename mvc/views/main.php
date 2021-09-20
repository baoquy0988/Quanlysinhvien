
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost/MVC/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
<div class="header">
    <?php
        require_once "./mvc/views/blocks/header.php";
    ?>
</div>
<div class="content">
    <?php
        require_once "./mvc/views/pages/".$data["page"].".php";
    ?>
</div>
</body>
</html>