<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type"
          content="text/html; charset=UTF-8">
    <link rel="stylesheet"
          href="style.css" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Đăng nhập</title>
</head>

<body id="panel">
    <form action='index.php'
          class="panel_heading"
          method='POST'>
        <img src="logo.png"
             alt=""
             style="width: 75px; height: 75px">
        <h3>Trường Đại học Thương Mại</h3>
        <h4>Đăng nhập quản trị viên</h4>
        <hr style="width: 340px;">
        <input type="text"
               class="name"
               name="username"
               value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>"
               placeholder="Tên đăng nhập"
               pattern="^[A-Za-z][A-Za-z0-9_]{7,29}$"
               title="Username từ 7 ký tự trở lên"
               required> <br>
        <input type="password"
               class="pass"
               name="passlg"
               placeholder="Mật khẩu"
               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
               title="Password phải chứa ít nhất một số, một chữ hoa, chữ thường và ít nhất 8 ký tự trở lên"
               required> <br>
        <span class="show-btn"><i class="fas fa-eye"></i></span>
        <button type="submit"
                class="btn-login"
                name="login">Đăng nhập</button>
        <form>
</body>
<script>
const passField = document.querySelector(".pass");
const showBtn = document.querySelector("span i");
showBtn.onclick = (() => {
    if (passField.type === "password") {
        passField.type = "text";
        showBtn.classList.add("hide-btn");
    } else {
        passField.type = "password";
        showBtn.classList.remove("hide-btn");
    }
});
</script>

</html>