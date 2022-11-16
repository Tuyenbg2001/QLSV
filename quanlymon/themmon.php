<?php
$conn = mysqli_connect("localhost", "root", "08122001tT", "datasv") or die("Connection failed !");
mysqli_set_charset($conn, 'utf8');

if (!empty($_POST['add_mon']))
{
    $data['MaMon'] = isset($_POST['id']) ? $_POST['id'] : '';
    $data['TenMon'] = isset($_POST['ten_mon']) ? $_POST['ten_mon'] : '';
    $data['SoTC'] = isset($_POST['so_tc']) ? $_POST['so_tc'] : '';

    $errors = array();
    if (empty($data['MaMon'])){
        $errors['MaMon'] = 'Chưa nhập mã môn';
    }
    if (empty($data['TenMon'])){
        $errors['TenMon'] = 'Chưa nhập tên môn';
    }
    if (empty($data['SoTC'])){
        $errors['SoTC'] = 'Chưa nhập số tín chỉ';
    }
    if (!$errors){
        $mon_id = addslashes($data['MaMon']);
        $ten_mon = addslashes($data['TenMon']);
        $so_tc = addslashes($data['SoTC']);
        
        $sql = "
                INSERT INTO mon(MaMon, TenMon, SoTC) VALUES
                ('$mon_id','$ten_mon','$so_tc')
        ";
        $query = mysqli_query($conn, $sql);
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
    <title>Thêm môn</title>
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
                    <h1>THÊM MÔN HỌC</h1>
                </div>
                <br>
                <input onclick="window.location = 'showmon.php'"
                       type="button"
                       class="back"
                       value="Trở về" /> <br> <br>
                <form method="post"
                      action="themmon.php">
                    <div class="table wrapper">
                        <table class="fl-table">
                            <tr>
                                <th>Mã môn</th>
                                <td>
                                    <input type="text"
                                           name="id"
                                           class="edit_sinhvien"
                                           value="<?php echo !empty($data['MaMon']) ? $data['MaMon'] : ''; ?>" />
                                    <?php if (!empty($errors['MaMon'])) echo $errors['MaMon']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Tên môn</th>
                                <td>
                                    <input type="text"
                                           name="ten_mon"
                                           class="edit_sinhvien"
                                           value="<?php echo !empty($data['TenMon']) ? $data['TenMon'] : ''; ?>" />
                                    <?php if (!empty($errors['TenMon'])) echo $errors['TenMon']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Số tín chỉ</th>
                                <td>
                                    <input type="number"
                                           name="so_tc"
                                           class="edit_sinhvien"
                                           value="<?php echo !empty($data['SoTC']) ? $data['SoTC'] : ''; ?>" />
                                    <?php if (!empty($errors['SoTC'])) echo $errors['SoTC']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit"
                                           name="add_mon"
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