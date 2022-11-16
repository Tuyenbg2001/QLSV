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
            <div id="menu">
                <ul>
                    <li>
                        <a href="../index.php?page=admin"><i class="fa-solid fa-house"></i>Trang chủ</a>
                    </li>
                    <li class="more-func">
                        <a href="../quanlylop/dslop.php">
                            <i class="fa-solid fa-building-columns"></i> Lớp
                        </a><br>
                        <ul class="more-func-child nn">
                            <li><a href="../quanlylop/dslop.php">Danh sách lớp</a></li>
                            <li><a href="../quanlylop/xetlop.php">Thêm sinh viên vào lớp</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../quanlysinhvien/showsinhvien.php"><i class="fa-solid fa-graduation-cap"></i>Sinh
                            viên</a>
                    </li>
                    <li class="more-func">
                        <a href="">
                            <i class="fa-solid fa-graduation-cap"></i>
                            Đánh giá sinh viên
                            <i class="fa-solid fa-angle-down"></i>
                            <ul class="more-func-child">
                                <li><a href="../danhgiasv/dskhenthuong.php">Danh sách khen thưởng</a></li>
                                <li><a href="../danhgiasv/dscanhcao.php">Danh sách cảnh cáo</a></li>
                                <li><a href="../danhgiasv/dsbuocthoihoc.php">Danh sách buộc thôi học</a></li>
                            </ul>
                        </a>
                    </li>
                    <li class="more-func">
                        <a href="">
                            <i class="fa-solid fa-graduation-cap"></i>
                            Chức năng khác
                            <i class="fa-solid fa-angle-down"></i>
                            <ul class="more-func-child">
                                <li><a href="../doituong/doituonguutien.php">Đối tượng ưu tiên</a></li>
                                <li><a href="../capthe/quanlythe.php">Quản lý thẻ sinh viên</a></li>
                            </ul>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</body>