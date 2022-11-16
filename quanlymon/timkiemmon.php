<?php
    $conn = mysqli_connect("localhost", "root", "08122001tT", "datasv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');

    function check_id($mon_id)
    {
        global $conn;
        
        $sql = "select * from mon where MaMon like '%$mon_id%' order by MaMon";
        $check = mysqli_query($conn, $sql);
        if (mysqli_num_rows($check) > 0)
        {
            return true;
        }
        return false;
    }

    if (isset($_GET['submit']))
    {
        $ma_mon = $_GET['ma_mon'];
        if (empty($ma_mon) || check_id($ma_mon) == false){
            header('location: showmon.php');
        }
    }
    
    $sql = "select * from mon where MaMon like '%$ma_mon%' order by MaMon";
    $query = mysqli_query($conn, $sql);
    while($fetch = mysqli_fetch_array($query))
    {
        $data = $fetch;
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
    <title>Tìm kiếm môn</title>
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
                    <h1>THÔNG TIN MÔN</h1>
                </div>
                <input onclick="window.location = 'showmon.php'"
                       type="button"
                       class="back"
                       value="Trở về" /> <br> <br>
                <div class="table wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>Mã môn</th>
                                <th>Tên môn</th>
                                <th>Số tín chỉ</th>
                                <th>Chức năng</th>
                            </tr>

                        </thead>

                        <tr>
                            <td><?php echo $data['MaMon']; ?></td>
                            <td><?php echo $data['TenMon']; ?></td>
                            <td><?php echo $data['SoTC']; ?></td>
                            <td>
                                <form method="post"
                                      action="xoamon.php">
                                    <input onclick="window.location = 'suamon.php?id=<?php echo $data['MaMon']; ?>'"
                                           type="button"
                                           class="btn-submit-css"
                                           value="Sửa" />
                                    <input type="hidden"
                                           name="id"
                                           value="<?php echo $data['MaMon']; ?>" />
                                    <input onclick="return confirm('Bạn có chắc muốn xóa không?');"
                                           type="submit"
                                           name="delete"
                                           class="btn-submit-css"
                                           value="Xóa" />
                                </form>
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