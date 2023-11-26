
    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="view/img/Food-1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Cơm Tấm</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Cơm tấm sườn bì chả là một món ăn đặc trưng của người miền Nam, được bán ở rất nhiều hàng quán từ vỉa hè đến nhà hàng khang trang. Món ăn này có nguyên liệu chính là cơm tấm, sườn nướng, bì heo và chả trứng.</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="view/img/Food-2.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Bò Bít Tết</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Bò bít tết là một món ăn nổi tiếng của ẩm thực phương Tây, được làm từ thịt bò cắt lát phẳng, thường được nướng vỉ, áp chảo hoặc nướng broiling ở nhiệt độ cao. Món ăn này có hương vị thơm ngon, đậm đà và được nhiều người yêu thích.</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="view/img/Food-3.png" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Sushi</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Sushi là một món ăn truyền thống của Nhật Bản, được làm từ cơm trộn giấm kết hợp với các nguyên liệu khác như hải sản, trứng cá, rau củ,... Sushi có nhiều loại khác nhau, mỗi loại mang một hương vị và nét đặc trưng riêng.</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="view/img/Food-4.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Lẩu Nấm</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="view/img/Food-5.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Nem Rán</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    
    <!-- Featured End -->


    <!-- Categories Start -->
    
    <!-- Categories End -->


    <!-- Products Start -->
    <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Sản Phẩm Tìm Kiếm</span></h4>

    <div class="container-fluid pt-5 pb-3 ">
        
    
        
        <div class="row px-xl-5 d-flex flex-wrap">
        <?php 
        //      if (!$query_timkiem) {
    //     echo "Error inserting data: " . mysqli_error($connect);
    // };
        $productImage = "";
        while($row_timkiem = mysqli_fetch_assoc($query_timkiem)){ 
        $productImage = $row_timkiem["sp_img"];
        $Url_img = "admin/img";
        // var_dump($Url_img); 
         ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                    <img src="<?php echo $Url_img  . "/" . $productImage; ?>" alt="" width ="400" height = "300"> 
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href=""><?php echo $row_timkiem["sp_name"]; ?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5><?php echo $row_timkiem["sp_price"] ,'$'; ?></h5><h6 class="text-muted ml-2"><del></del></h6>
                        </div>
                        <button class="rounded btn btn-success"><a href="index.php?act=cart&id=<?php echo $row_timkiem['sp_id'] ?>">Đặt Hàng</a></button>
                        <button type="button" class=" rounded btn btn-info"><a href="index.php?act=viewdetail&id=<?php echo $row_timkiem['sp_id'];?> ">Xem Chi Tiết</a></button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div> 
   
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="view/img/Food-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="view/img/Food-4.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
