<?php 
$sql = "SELECT * FROM sanpham LIMIT 8";
$result = mysqli_query($connect,$sql);

$id = $_GET['id'];
// echo $id;
$sql_sanpham_detail = "SELECT * FROM sanpham WHERE sp_id = $id ";
$query_sql_sanpham_detail = mysqli_query($connect,$sql_sanpham_detail);
// echo $sql_sanpham_detail;
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
    <link href="View/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="View/preconnect" href="https://fonts.gstatic.com">
    <link href="View/https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="view/lib/animate/animate.min.css" rel="stylesheet">
    <link href="view/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
   
    <!-- Topbar End -->


    <!-- Navbar Start -->
    
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <!-- <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shop Detail</span>
                </nav>
            </div>
        </div>
    </div> -->
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <?php 
                while($row_detail = mysqli_fetch_assoc($query_sql_sanpham_detail)){ 
                $productImage = $row_detail["sp_img"];
                $Url_img = "admin/img";
            ?>
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                        <img src="<?php echo $Url_img  . "/" . $productImage; ?>" alt="" width ="700" height = "400"> 
                        </div>      
                    </div>
                </div>
            </div>
         
            <div class="col-lg-7 h-auto mb-30">
                <form action=""method = "get">                
                    <div class="h-100 bg-light p-30">
                    <h3><?php echo $row_detail['sp_name'] ?></h3>
                    <h3 class="font-weight-semi-bold mb-4"><?php echo $row_detail['sp_price'], '$' ?></h3>
                    <p class="mb-4">Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit
                        clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea
                        Nonumy</p>
                  
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <!-- <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div> -->
                            
                            <input type="text" name="quantity" class="form-control bg-secondary border-0 text-center" value="1">
                            <!-- <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div> -->
                        </div>
                        <button class="btn btn-success px-3"><i class="fa fa-shopping-cart mr-1"></i><a href="index.php?act=cart&id=<?php echo $row_detail['sp_id'] ?>">Đặt Hàng</a></button>
                    </div>
                </div>
            </div>
            </form>
        </div>
        
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Reviews (0)</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3"> Description <?php echo $row_detail['sp_name']?></h4>
                            <p><?php echo $row_detail['sp_mota']  ?></p>
                        </div>
                        <?php } ?>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">1 review for "Product Name"</h4>
                                    <div class="media mb-4">
                                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-primary mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-primary">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0">
                                            <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">You May Also Like</span></h2>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                    <?php 
                    $productImage = "";                
                    while($row = mysqli_fetch_assoc($result)){ 
                        $productImage = $row["sp_img"];
                        $Url_Images = "admin/img";
                        
                    ?>
                    <div class="product-item bg-light">
                        <div class="product-img position-relative overflow-hidden">
                        <img src="<?php echo $Url_Images  . "/" . $productImage ?>" alt="" width ="400" height = "300">                         
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href=""><?php echo $row['sp_name'] ?></a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5><?php echo $row['sp_price'] ?></h5><h6 class="text-muted ml-2"><del>439.000</del></h6>
                            </div>   
                            <button class="rounded btn btn-success"><a href="index.php?act=cart&id=<?php echo $row['sp_id'] ?>">Đặt Hàng</a></button>
                            <button type="button" class=" rounded btn btn-info"><a href="index.php?act=viewdetail&id=<?php echo $row['sp_id'];?> ">Xem Chi Tiết</a></button>                       
                        </div>
                    </div>   
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Footer Start -->
    
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="View/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="View/js/main.js"></script>
</body>

</html>