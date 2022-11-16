<?php

    $conn = mysqli_connect("localhost", "root", "08122001tT", "datasv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');

    $sql = "select * from mon";
    $query = mysqli_query($conn, $sql);
    $mon = array();
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $mon[] = $row;
        }
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
    <title>Điểm danh</title>
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
                    <h1>QUẢN LÝ ĐIỂM DANH</h1>
                </div>
                <br>
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã môn</th>
                                <th>Tên môn</th>
                                <th>Số tín chỉ</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <?php
            $i = 0;
            foreach ($mon as $item){ ?>
                        <tbody>
                            <tr>
                                <td><?php $i++; echo $i; ?></td>
                                <td><?php echo $item['MaMon']; ?></td>
                                <td><?php echo $item['TenMon']; ?></td>
                                <td><?php echo $item['SoTC']; ?></td>

                                <td>
                                    <form method="post"
                                          action="diemdanh.php">
                                        <input onclick="window.location = '../quanlydiemdanh/phieudiemdanh.php?id=<?php echo $item['MaMon'] ?>'"
                                               type="button"
                                               class="btn-submit-css"
                                               value="Điểm danh">
                                        <input type="hidden"
                                               name="id"
                                               value="<?php echo $item['MaMon']; ?>" />
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>