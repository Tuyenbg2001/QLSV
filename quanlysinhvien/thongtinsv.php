<?php
    $conn = mysqli_connect("localhost", "root", "08122001tT", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');

    $id = $_GET["id"];

    $result = mysqli_query($conn, "select *from sinhvien join lop where sinhvien.MaLop=lop.MaLop AND MaSV='$id'");
    $row = mysqli_fetch_assoc($result);
    $result1 = mysqli_query($conn, "select *from sinhvien where MaSV='$id'");
    $row1 = mysqli_fetch_assoc($result);
    $total_records = $row['total'];


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
                <div class="table-wrapper">
                    <table class="fl-table tt">
                        <thead>
                            <tr>
                                <th>Mã sinh viên</th>
                                <th>Họ tên</th>
                                <th>Lớp</th>
                            </tr>
                        </thead>
                        <?php if( $row['MaLop'] == NULL){
            foreach ($result1 as $item){ ?>
                        <tbody>
                            <tr>
                                <td><?php echo $item['MaSV']; ?></td>
                                <td><?php echo $item['TenSV']; ?></td>
                                <td><?php echo "Chưa xét lớp" ?></td>
                            </tr>
                        </tbody>
                        <?php }} ?>
                        <?php if( $row['MaLop'] != NULL){
            foreach ($result as $item){ ?>
                        <tbody>
                            <tr>
                                <td><?php echo $item['MaSV']; ?></td>
                                <td><?php echo $item['TenSV']; ?></td>
                                <td><?php echo $item['TenLop']; ?></td>
                            </tr>
                        </tbody>
                        <?php } }?>
                    </table>
                    <div class="head_title">
                        <h1>Thông tin sinh viên</h1>
                        <div class="ttsv"
                             style="display:flex; justify-content: space-between;">
                            <div>
                                <?php foreach ($result as $item){ ?>
                                <table class="fl-table tt">
                                    <tr>
                                        <th>Ngày sinh</th>
                                        <td><?php echo $item['NgaySinh']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Quê quán</th>
                                        <td><?php echo $item['QueQuan']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Giới tính</th>
                                        <td><?php echo $item['GioiTinh']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Dân tộc</th>
                                        <td><?php echo $item['DanToc']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tôn giáo</th>
                                        <td><?php echo $item['TonGiao']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table class="fl-table tt">
                                    <tr>
                                        <th>Số CMND/CCCD</th>
                                        <td><?php echo $item['SoCMT']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nơi cấp</th>
                                        <td><?php echo $item['NoiCapCMT']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>SĐT</th>
                                        <td><?php echo $item['SDT']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo $item['Email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Đối tượng miễn giảm</th>
                                        <td><?php echo $item['DoiTuongMG']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <?php } ?>
                            </table>

                            <?php if( $row['MaLop'] == NULL){ foreach ($result1 as $item){ ?>
                            <table class="fl-table tt">
                                <tr>
                                    <th>Ngày sinh</th>
                                    <td><?php echo $item['NgaySinh']; ?></td>
                                </tr>
                                <tr>
                                    <th>Quê quán</th>
                                    <td><?php echo $item['QueQuan']; ?></td>
                                </tr>
                                <tr>
                                    <th>Giới tính</th>
                                    <td><?php echo $item['GioiTinh']; ?></td>
                                </tr>
                                <tr>
                                    <th>Dân tộc</th>
                                    <td><?php echo $item['DanToc']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tôn giáo</th>
                                    <td><?php echo $item['TonGiao']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <table class="fl-table tt">
                                <tr>
                                    <th>Số CMND/CCCD</th>
                                    <td><?php echo $item['SoCMT']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nơi cấp</th>
                                    <td><?php echo $item['NoiCapCMT']; ?></td>
                                </tr>
                                <tr>
                                    <th>SĐT</th>
                                    <td><?php echo $item['SDT']; ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $item['Email']; ?></td>
                                </tr>
                                <tr>
                                    <th>Đối tượng miễn giảm</th>
                                    <td><?php echo $item['DoiTuongMG']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <?php }} ?>
                    </div>
                    <button class="btnSave"
                            onclick="window.location='../quanlysinhvien/suasinhvien.php?id=<?php echo $item['MaSV'] ?>'">Sửa</button><br><br>
                </div>
            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>