<?php
	$connect = mysqli_connect('localhost','root','08122001tT','qlsv');
	mysqli_set_charset($connect,"utf8");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="styleAdmin.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Quản lý sinh viên TMU</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>

<body>
    <section>
        <div class="section-contain">
            <?php include("menu.php")?>
            <div id="showFunction">
                <img src="./imgs/anh truong.jpg"
                     alt="">
            </div>
        </div>
    </section>
</body>