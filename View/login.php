
<section class="wrapper">
    <div class="form signup">
        <header>Login</header>
        <form action="" method="post">
            <input type="text" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="submit" name="login_submit" value="Login" />
            <p>Nếu chưa có tài khoản vui lòng   |   <a href="index.php?act=signup">Đăng Ký</a></p>
        </form>
    </div>
</section>
<?php
// session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "duanmot2023";

$connect = mysqli_connect($host, $username, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Bảo vệ dữ liệu để ngăn chặn SQL injection
  $email = mysqli_real_escape_string($connect, $email);
  $password = mysqli_real_escape_string($connect, $password);

  // Truy vấn để kiểm tra thông tin đăng nhập
  $query = "SELECT * FROM taikhoan WHERE email='$email' AND password='$password'";
  $result = $connect->query($query);

  if ($result->num_rows > 0) {
      // Đăng nhập thành công
      echo "Đăng nhập thành công.";
      header("Location: http://localhost/D%e1%bb%b1%20%c3%81n%201/", true, 301);
exit();
      
  } else {
      // Đăng nhập thất bại
      echo "<script>Đăng nhập thất bại. Vui lòng kiểm tra lại email và mật khẩu.</script>";
  }
}

// Đóng kết nối
$connect->close();
?>