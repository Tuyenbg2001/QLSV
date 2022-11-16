<?php
    session_start();
    $id = $_SESSION['user'];
    $conn = mysqli_connect("localhost", "root", "08122001tT", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');
    $result = mysqli_query($conn, 'select count(MaLop) as total from lop');
    $row = mysqli_fetch_assoc($result);
    $total_records = $row['total'];

    $sql = "select * from sinhvien join khoa where sinhvien.MaKhoa = khoa.MaKhoa AND MaLop IS NULL ";
    $qr = mysqli_query($conn, $sql);

    mysqli_close($conn);
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
          href="../styleAdmin.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>

<body>
    <?php include("../header.php"); ?>
    <?php include("../nav.php"); ?>
    <section>
        <div class="section-contain">
            <?php include("../menu.php"); ?>
            <div id="showFunction">

                <div class="head_title">
                    <h1>Danh sách sinh viên</h1>
                </div>
                <br>
                
                <div class="table-wrapper">
                    <table class="fl-table tt">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã sinh viên</th>
                                <th>Họ tên</th>
                                <th>Giới tính</th>
                                <th>Ngày sinh</th>
                                <th>Địa chỉ</th>
                                <th>SĐT</th>
                                <th>Tên khoa</th>
                                <th>Chức năng</th>                    
                            </tr>
                        </thead>
                        <?php 
            $i = 0;    
            while ($item = mysqli_fetch_array($qr)){ ?>
                        <tbody>
                            <tr>
                                <td><?php $i++; echo $i; ?></td>
                                <td><?php echo $item['MaSV']; ?></td>
                                <td><?php echo $item['TenSV']; ?></td>
                                <td><?php echo $item['GioiTinh']; ?></td>
                                <td><?php echo $item['NgaySinh']; ?></td>
                                <td><?php echo $item['QueQuan']; ?></td>
                                <td><?php echo $item['SDT']; ?></td>
                                <td><?php echo $item['TenKhoa']; ?></td>
                                <td>
                                    <form method="post"
                                          action="">
                                        <input onclick="window.location = '../quanlylop/lop.php?id=<?php echo $item['MaKhoa'] ?>'"
                                               type="button"
                                               value="Thêm vào lớp"
                                               class="btn-submit-css">
                                    </form>
                                </td>                       
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
                <br>               
            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>