<?php
    $conn = mysqli_connect("localhost", "root", "08122001tT", "datasv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    if ($id){
        $sql = "select * from mon where MaMon like '%$id%' order by MaMon";
        $query = mysqli_query($conn, $sql);
        while($fetch = mysqli_fetch_array($query))
        {
            $data = $fetch;
        }
    }

    if (!$data){
        header("location: showmon.php");
    }

    if (!empty($_POST['edit_mon']))
    {
        $data['TenMon'] = isset($_POST['ten_mon']) ? $_POST['ten_mon'] : '';
        $data['SoTC'] = isset($_POST['so_tc']) ? $_POST['so_tc'] : '';
        $data['MaMon'] = isset($_POST['id']) ? $_POST['id'] : '';
        
        // Validate thong tin
        $errors = array();
        if (empty($data['TenMon'])){
            $errors['TenMon'] = 'Chưa nhập tên môn';
        }
        if (empty($data['SoTC'])){
            $errors['SoTC'] = 'Chưa nhập số tín chỉ';
        }
        if (!$errors){
            $ten_mon = addslashes($data['TenMon']);
            $so_tc = addslashes($data['SoTC']);
        
        $update = "
                UPDATE mon SET
                TenMon = '$ten_mon',
                SoTC = '$so_tc'
                WHERE MaMon = '$id'
        ";
        $query = mysqli_query($conn, $update);
        header("location: showmon.php");
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
    <title>Sửa môn</title>
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
                    <h1>SỬA THÔNG TIN MÔN</h1>
                </div>
                <br>
                <input onclick="window.location = 'showmon.php'"
                       type="button"
                       class="back"
                       value="Trở về" /> <br> <br>
                <form method="post"
                      action="suamon.php?id=<?php echo $data['MaMon']; ?>">
                    <div class="table wrapper">
                        <table class="fl-table">
                            <tr>
                                <th>Tên môn</th>
                                <td>
                                    <input type="text"
                                           name="ten_mon"
                                           value="<?php echo $data['TenMon']; ?>" />
                                    <?php if (!empty($errors['TenMon'])) echo $errors['TenMon']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Số tín chỉ</th>
                                <td>
                                    <input type="number"
                                           name="so_tc"
                                           value="<?php echo $data['SoTC']; ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="hidden"
                                           name="id"
                                           value="<?php echo $data['MaMon']; ?>" />
                                    <input type="submit"
                                           name="edit_mon"
                                           class="btnSave"
                                           value="Lưu" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>