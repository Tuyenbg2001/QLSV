<?php
    $conn = mysqli_connect("localhost", "root", "08122001tT", "datasv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');

    $id = isset($_POST['id']) ? $_POST['id'] : '';
    if ($id){
        $sql_diem = "DELETE FROM diem WHERE MaMon = '$id'";
        $sql_dd = "DELETE FROM diemdanh WHERE MaMon = '$id'";
        $sql = "DELETE FROM mon WHERE MaMon = '$id'";

        $query = mysqli_query($conn, $sql_diem);
        $query = mysqli_query($conn, $sql_dd);
        $query = mysqli_query($conn, $sql);
    }
    mysqli_close($conn);
     
    // Trở về trang danh sách
    header("location: showmon.php");
?>