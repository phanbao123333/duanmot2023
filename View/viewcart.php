  <?php 
 $cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
// var_dump($cart);
//  echo "<pre>";
//  print_r($cart);
// if (isset($_GET['id_cart']) && isset($_GET['action']) && $_GET['action'] === 'delete') {
//     $id = $_GET['id_cart'];
//     unset($_SESSION['cart'][$id]);
  
//     // Kiểm tra xem sản phẩm đã bị xóa hay chưa
//     if (!isset($_SESSION['cart'][$id])) {
//       echo 'Sản phẩm đã bị xóa';
//     } else {
//         echo 'Sản phẩm chưa bị xóa';
//     }
//   }

 
  ?>
  
  <div class="container-fluid">
  <form action="index.php?act=db_donhang" method="post">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                       
                        <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">                     
                    <?php foreach ($cart as $value) {
                         $productImage = $value["images"];
                         $Url_img = "admin/img";    
                         
                        ?> 
                        <tr>
                            <td class="align-middle"><img src="<?php echo $Url_img  . "/" . $productImage; ?>" alt="" style="width: 80px; height:50px"><?php echo $value['name'] ?></td>
                            <td class="align-middle"><?php echo $value['price']  ?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                   
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo $value['quantity'] ?>">
                                   
                                </div>
                            </td>
                            <td class="align-middle"><?php echo $value['price'] * $value['quantity']  ?></td>
                            <td  class="align-middle"><button class="btn btn-sm btn-danger"><a href="index.php?act=cart&id_cart=<?php echo $value['id']?>">Xóa</a></button></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4"> 
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>$Null</h6>
                        </div> 
                    </div>
                    <?php
                    $sum = 0;
                     foreach ($cart as $value_sum) {     
                        $sum += $value_sum['price'] * $value_sum['quantity'];
                        // echo $sum; 
                    } ?>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Tổng</h5>
                            <h5><?php echo $sum ?></h5>
                        </div>
                    </div>
                  
                </div>
                
            <div class="form-group">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Thông tin nhận hàng</span></h5>
                <label for="exampleInputEmail1">Họ Tên</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter Name" require>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Địa Chỉ</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="diachi" placeholder="Address" require>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Số Điện Thoại</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="phone" placeholder="PhoneNumber" require>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Email" require>
            </div>
            <div class="form-check">
                <button type="submit" name ="dathang" class="btn btn-primary">Đặt Hàng</button>  
            </div>
          
            </div>
        </div>
         
        </form>
    </div>
  