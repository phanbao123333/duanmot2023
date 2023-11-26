<?php 
// Truy vấn danh mục
$sql = "SELECT * FROM danhmuc";
$query = mysqli_query($connect,$sql);
//  if (!$query) {
//         echo "Error inserting data: " . mysqli_error($connect);
//     };
// Truy vấn sản phẩm
$sql = "SELECT * FROM sanpham";
$result_sp = mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="View//favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="View/preconnect" href="view/https://fonts.gstatic.com">
    <link href="View/https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="View/lib/animate/animate.min.css" rel="stylesheet">
    <link href="View/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="View/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid">

        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Food</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Asian</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <!-- Truy vân tìm kiếm -->
                <?php if(isset($_POST['search'])){
                    $tukhoa = $_POST['tukhoa'];
                    $sql_timkiem = "SELECT * FROM sanpham WHERE sp_name LIKE '%" . $tukhoa . "%' ";
                    $query_timkiem = mysqli_query($connect,$sql_timkiem);
                    
                    }
                 ?>
                <form action="index.php?act=viewtimkiem" method="post">
                    <div class="input-group">
                        <input type="text" name="tukhoa" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span><button name="search" value="Tìm Kiếm" class ="btn btn-success">Tìm Kiếm</button></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+012 345 6789</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
 

    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Danh Mục</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                    <?php while($row = mysqli_fetch_assoc($query)){ ?>
                        <div class="nav-item dropdown dropright">
                        
                                <a href="index.php?act=viewdanhmuc&iddm=<?php echo $row['dm_id'] ?>" class="nav-item nav-link"><?php echo $row['dm_name'] ?></a>
                            </div>
                            <?php } ?>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Food</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Asian</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>
                            <a href="index.php?act=detail" class="nav-item nav-link">Sản Phẩm Chi Tiết</a>
                            <a href="index.php?act=viewcart" class="nav-item nav-link">Giỏ Hàng</a>
                        
                            <a href="index.php?act=contact" class="nav-item nav-link">Liên Hệ - Hỏi Đáp</a>
                            <a href="index.php?act=login" class="nav-item nav-link">Đăng Nhập</a>
                            <a href="index.php?act=signup" class="nav-item nav-link">Đăng kí</a>

                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->