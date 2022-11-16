<?php
    $conn = mysqli_connect("localhost", "root", "08122001tT", "datasv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    if ($id){
        $sql = "select * from diemdanh where MaMon like '$id' order by MaMon";
        $query = mysqli_query($conn, $sql);
        $data = array();
        while ($row = mysqli_fetch_array($query)){
            $data[] = $row;
        }

        $sql_mon = "select * from mon where MaMon like '$id' order by MaMon";
        $query_mon = mysqli_query($conn, $sql_mon);
        while ($fetch = mysqli_fetch_array($query_mon)){
            $mon = $fetch;
        }
    }

    if (!empty($_GET['diemdanh'])){
        $data['TietNghi'] = isset($_GET['tietNghi']) ? $_GET['tietNghi'] : '';
        $daNghi = isset($_GET['daNghi']) ? $_GET['daNghi'] : '';

        $tietnghi = addslashes($data['TietNghi']);
        $nghi = addslashes($daNghi);
        $stt = addslashes($data['BanGhi']);
        $total = $tietnghi + $nghi;

        $sql_update = mysqli_query($conn, "update diemdanh set TietNghi = {$total} where BanGhi = $stt");

        header('location: phieudiemdanh.php');
    }

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
    <title>Phiếu điểm danh</title>
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
                    <h1>PHIẾU ĐIỂM DANH</h1>
                </div>
                <br>
                <input onclick="window.location = 'chonmon.php'"
                       type="button"
                       class="back"
                       value="Trở về" /> <br> <br>
                <table class="title-table">
                    <tr>
                        <td>Mã môn : </td>
                        <td><?php echo $mon['MaMon'] ?></td>
                    </tr>
                    <tr>
                        <td>Tên môn : </td>
                        <td><?php echo $mon['TenMon'] ?></td>
                    </tr>
                    <tr>
                        <td>Ngày điểm danh : </td>
                        <td>
                            <form action=""
                                  method="get">
                                <input type="date"
                                       name="date">
                            </form>
                        </td>
                    </tr>
                </table>
                <br>
                <div class="table wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã sinh viên</th>
                                <th>Tên sinh viên</th>
                                <th>Số tiết nghỉ</th>
                            </tr>
                        </thead>
                        <?php $dem = 0;
        foreach ($data as $item){
            $dem++;  
        ?>
                        <tr>
                            <td><?php echo $dem; ?></td>
                            <td>
                                <?php echo $item['MaSV'] ?>
                            </td>
                            <td> <?php $sql_tksv = mysqli_query($conn, "select * from sinhvien where MaSV = {$item['MaSV']}");
                while ($x = mysqli_fetch_assoc($sql_tksv)){
                    $sv = $x;
                }
                echo $sv['FullName'];
            ?></td>

                            <td>
                                <a href=""></a>
                                <form method="get">
                                    <input type="number"
                                           name="tietNghi"
                                           class="edit_sinhvien"
                                           value="0">
                                    <input type="hidden"
                                           name="daNghi"
                                           value="<?php echo $item['TietNghi'] ?>">
                                    <input type="submit"
                                           name="diemdanh"
                                           class="btnSave"
                                           value="Lưu" />
                                </form>
                            </td>
                        </tr>
                        <?php }
            $sum = $dem;
        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>