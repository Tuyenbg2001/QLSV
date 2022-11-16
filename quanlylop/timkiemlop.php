<?php
    $conn = mysqli_connect("localhost", "root", "08122001tT", "datasv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');

    function check_id($lop_id)
    {
        global $conn;
        
        $sql = "select * from lop where MaLop like '%$lop_id%' order by MaLop";
        $check = mysqli_query($conn, $sql);
        if (mysqli_num_rows($check) > 0)
        {
            return true;
        }
        return false;
    }

    if (isset($_GET['submit']))
    {
        $lop_id = $_GET['ma_lop'];
        if (empty($lop_id) || check_id($lop_id) == false){
            header('location: dslop.php');
        }
    }
    
    $sql = "select * from lop where MaLop like '%$lop_id%' order by MaLop";
    $query = mysqli_query($conn, $sql);
    while($fetch = mysqli_fetch_array($query))
    {
        $data = $fetch;
    }

    function soLuong($ma_lop){
        $sql_sl = "select * from sinhvien where MaLop = '$ma_lop'";
        $query_sl = mysqli_query(mysqli_connect("localhost", "root", "08122001tT", "datasv"), $sql_sl);
        $sl = array();
        if ($query_sl){
            while ($row_sl = mysqli_fetch_assoc($query_sl)){
                $sl[] = $row_sl;
            }
        }
        return count($sl);
    }
    
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
    <title>Tìm lớp</title>
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
                    <h1>THÔNG TIN LỚP</h1>
                </div>
                <br>
                <input onclick="window.location = 'dslop.php'"
                       type="button"
                       class="back"
                       value="Trở về" /> <br> <br>
                <div class="table wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>Mã lớp</th>
                                <th>Tên lớp</th>
                                <th>Số sinh viên</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tr>
                            <td><?php echo $data['MaLop']; ?></td>
                            <td><?php echo $data['TenLop']; ?></td>
                            <td><?php echo soLuong($data['MaLop']) ?></td>
                            <td>
                                <input onclick="window.location = 'thongtinlop.php?id=<?php echo $data['MaLop'] ?>'"
                                       type="button"
                                       class="btn-submit-css"
                                       value="Thông tin">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>