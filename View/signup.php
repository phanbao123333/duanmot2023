
<section class="wrapper">
    <div class="form signup">
        <header>Signup</header>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required />
            <input type="text" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="password" name="confirmpassword" placeholder="Confirm Password" required>

            <input type="submit" name="submit" value="Signup" />
        </form>
    </div>
</section>

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "duanmot2023";

$connect = mysqli_connect($host, $username, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    // Form is submitted
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    if ($password == $confirmpassword) {
        // Use prepared statements to prevent SQL injection
        
        $query = "INSERT INTO `taikhoan` (`id`, `username`, `email`, `password`) VALUES (NULL, ?, ?, ?)";
        $stmt = mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $password);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location: http://localhost/D%e1%bb%b1%20%c3%81n%201/index.php?act=login"); // Redirect after successful registration
        echo "<script> alert('Đăng ký thành công') </script>";
        exit; // Ensure script stops after redirection
    } else {
        echo "<script> alert('Mật khẩu không hợp lệ') </script>";
    }
}

// Close the database connection at the end
mysqli_close($connect);
?>
