<?php
	$connect = mysqli_connect('localhost','root','08122001tT','qlsv');
	mysqli_set_charset($connect,"utf8");
    session_start();
    $user = $_SESSION['user'];
    $sql = "SELECT * FROM users WHERE username = '$user'";
    $query = mysqli_query($conn,$sql);
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
    <header>
        <div class="title">
            <div class="Group1">
                <div class="logo">
                    <img src="./imgs/logo-dhtm-3.png"
                         alt="">
                </div>
                <div class="img-content">
                    <img src="./imgs/content.png"
                         alt="">
                </div>
            </div>
        </div>
        <div class="title2">
            <h2>Hệ thống quản lý sinh viên</h2>
        </div>
    </header>
    <nav>
        <div class="group-user">
            <p><?php while($row = mysqli_fetch_array($query)){
                echo $row['full_name'];
            }?></p>
            <ul class="group-user-child">
                <li><a class="logout"
                       href="../login.php">Đăng xuất</a></li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="section-contain">
            <div id="menu">
                <ul>
                    <li>
                        <a href="./index.php?page=admin"><i class="fa-solid fa-house"></i>Trang chủ</a>
                    </li>
                    <li class="more-func">
                        <a href="./quanlylop/dslop.php">
                            <i class="fa-solid fa-building-columns"></i> Lớp
                        </a><br>
                        <ul class="more-func-child nn">
                            <li><a href="./quanlylop/dslop.php">Danh sách lớp</a></li>
                            <li><a href="./quanlylop/xetlop.php">Thêm sinh viên vào lớp</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="./quanlysinhvien/showsinhvien.php"><i class="fa-solid fa-graduation-cap"></i>Sinh
                            viên</a>
                    </li>
                    <li class="more-func">
                        <a href="">
                            <i class="fa-solid fa-graduation-cap"></i>
                            Đánh giá sinh viên
                            <i class="fa-solid fa-angle-down"></i>
                            <ul class="more-func-child">
                                <li><a href="./danhgiasv/dskhenthuong.php">Danh sách khen thưởng</a></li>
                                <li><a href="./danhgiasv/dscanhcao.php">Danh sách cảnh cáo</a></li>
                                <li><a href="./danhgiasv/dsbuocthoihoc.php">Danh sách buộc thôi học</a></li>
                            </ul>
                        </a>
                    </li>
                    <li class="more-func">
                        <a href="">
                            <i class="fa-solid fa-graduation-cap"></i>
                            Chức năng khác
                            <i class="fa-solid fa-angle-down"></i>
                            <ul class="more-func-child">
                                <li><a href="./doituong/doituonguutien.php">Đối tượng ưu tiên</a></li>
                                <li><a href="./capthe/quanlythe.php">Quản lý thẻ sinh viên</a></li>
                            </ul>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="showFunction">
                <h2>DashBoard</h2>
                <div class="DB-content">
                    <div class="grid">
                        <div class="grid-4"
                             style="background-color: rgb(223, 181, 105);">
                            <div class="left">
                                <div>
                                    <p>1</p>
                                    <h3>Trang chủ</h3>
                                </div>
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <div class="see-more">
                                <a href="">Xem thêm <i class="fa-solid fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="grid-4"
                             style="background-color: rgb(113, 173, 246);">
                            <div class="left">
                                <div>
                                    <p>2</p>
                                    <h3>Lớp</h3>
                                </div>
                                <i class="fa-solid fa-building-columns"></i>
                            </div>
                            <div class="see-more">
                                <a href="">Xem thêm <i class="fa-solid fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="grid-4"
                             style="background-color: rgb(94, 236, 94);">
                            <div class="left">
                                <div>
                                    <p>3</p>
                                    <h3>Sinh Viên</h3>
                                </div>
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="see-more">
                                <a href="./quanlysinhvien/showsinhvien.php">Xem thêm <i
                                       class="fa-solid fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="grid-4"
                             style="background-color: rgb(254, 116, 116);">
                            <div class="left">
                                <div>
                                    <p>4</p>
                                    <h3>Chức năng khác</h3>
                                </div>
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <div class="see-more">
                                <a href="">Xem thêm <i class="fa-solid fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-contain">
            <div class="footer-contain-left"><img src="./imgs/logo-footer.jpg"
                     alt="">
                <h2>Địa chỉ</h2>
                <div class="address">
                    <p>Cơ sở 1
                        Địa chỉ: 79 Hồ Tùng Mậu, Cầu Giấy, Hà Nội
                        Điện thoại: (024) 3764 3219
                        Fax: (024) 37643228<br>
                        Email: mail@tmu.edu.vn</p>
                    <p>Cơ sở 2
                        Địa chỉ: đường Lý Thường Kiệt, phường Lê Hồng Phong, Phủ Lý, Hà Nam
                        Điện thoại: (024) 3764 3219
                        Fax: (024) 37643228<br>
                        Email: mail@tmu.edu.vn</p>
                </div>
            </div>
            <div class="footer-contain-right">
                <h2>Liên Hệ</h2>
                <div class="contact">
                    <div class="contact-left">
                        <a href="https://www.facebook.com/thuongmaiuniversity/"><i
                               class="fa-brands fa-facebook"></i>Facebook</a><br>
                        <a href="https://plus.google.com/110330226327788492035/"><i
                               class="fa-brands fa-google-plus"></i>Google Plus</a><br>
                        <a href="https://www.youtube.com/channel/UC9-NJM8V8oXewEIfPHica_Q"><i
                               class="fa-brands fa-youtube"></i>Youtube</a><br>
                        <a href="https://www.instagram.com/thuongmaiuniversity/"><i
                               class="fa-brands fa-instagram-square"></i>Instagram</a>
                    </div>
                    <div class="contact-right">
                        <p>Bản đồ</p>
                        <a href="https://www.google.com/maps/place/Vietnam
                        +University+of+Commerce/@21.0373431,105.7721598,
                        16.75z/data=!4m5!3m4!1s0x313454b6163c392f:
                        0x1ebf64facbb56d03!8m2!3d21.0365415!4d105.7747142">
                            <img src="./imgs/maps.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>