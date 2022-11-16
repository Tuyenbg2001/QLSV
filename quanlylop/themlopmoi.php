<?php
$conn = mysqli_connect("localhost", "root", "08122001tT", "qlsv") or die("Connection failed !");
mysqli_set_charset($conn, 'utf8');

$sql_khoa = mysqli_query($conn, "select * from khoa order by MaKhoa DESC");
if (!empty($_POST['add_lop']))
{
    $data['MaLop'] = isset($_POST['id']) ? $_POST['id'] : '';
    $data['TenLop'] = isset($_POST['ten_lop']) ? $_POST['ten_lop'] : '';
    $data['MaKhoa'] = isset($_POST['ma_khoa']) ? $_POST['ma_khoa'] : '';

    $errors = array();
    if (empty($data['MaLop'])){
        $errors['MaLop'] = 'Chưa nhập mã lớp';
    }
    if (!preg_match("/^[a-zA-Z]*$/", $data['MaMon'])){
        $errors['MaLop'] = 'Mã môn không chứa ký tự đặc biệt';
    }
    if (empty($data['TenLop'])){
        $errors['TenLop'] = 'Chưa nhập tên lớp';
    }
    if (empty($data['MaKhoa']) || $data['MaKhoa'] == '---Chọn khoa---'){
        $errors['MaKhoa'] = 'Chưa nhập mã khoa';
    }
    if (!$errors){
        $lop_id = addslashes($data['MaLop']);
        $ten_lop = addslashes($data['TenLop']);
        $ma_khoa = addslashes($data['MaKhoa']);
        
        $sql = "
                INSERT INTO lop(MaLop, TenLop, MaKhoa) VALUES
                ('$lop_id','$ten_lop','$ma_khoa')
        ";
        $query = mysqli_query($conn, $sql);
        header("location: dslop.php");
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
    <title>Thêm lớp</title>
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
                    <h1>THÊM LỚP MỚI</h1>
                </div>
                <br>
                <input onclick="window.location = 'dslop.php'"
                       type="button"
                       class="back"
                       value="Trở về" /> <br> <br>
                <form method="post"
                      action="themlopmoi.php">
                    <div class="table wrapper">
                        <table class="fl-table">
                            <tr>
                                <th>Mã lớp</th>
                                <td>
                                    <input type="text"
                                           name="id"
                                           class="info_lop"
                                           value="<?php echo !empty($data['MaLop']) ? $data['MaLop'] : ''; ?>" />
                                    <?php if (!empty($errors['MaLop'])) echo $errors['MaLop']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Tên lớp</th>
                                <td>
                                    <input type="text"
                                           name="ten_lop"
                                           class="info_lop"
                                           value="<?php echo !empty($data['TenLop']) ? $data['TenLop'] : ''; ?>" />
                                    <?php if (!empty($errors['TenLop'])) echo $errors['TenLop']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Khoa</th>
                                <td>
                                    <select name="ma_khoa"
                                            class="info_lop">
                                        <option value="0">---Chọn khoa---</option>
                                        <?php
                    while ($row = mysqli_fetch_array($sql_khoa)){
                        if ($data['MaKhoa'] == $row['MaKhoa']){
                        ?>
                                        <option selected
                                                value="<?php echo $row['MaKhoa'] ?>"><?php echo $row['MaKhoa'] ?>
                                        </option>
                                        <?php
                        }else{?>
                                        <option value="<?php echo $row['MaKhoa'] ?>"><?php echo $row['MaKhoa'] ?>
                                        </option>
                                        <?php
                        }
                    }
                    ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit"
                                           name="add_lop"
                                           class="btnSave"
                                           value="Lưu" />
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