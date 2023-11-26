<?php 
 
if(isset($_POST['dathang']) && $_SESSION['cart'] && $_POST['name']!= ""){
    $name = $_POST['name'];
    $address = $_POST['diachi'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $total = 0;
    $date = date('y/m/d');
    $sql = "INSERT INTO donhang(name,address,phone,email,total,date) VALUES('$name','$address','$phone','$email','$total','$date')";
    $query = mysqli_query($connect, $sql);
    $last_id = $connect->insert_id;
    if ($query) {
        $last_id = mysqli_insert_id($connect);
        echo "Đặt hàng thành công. ID đơn hàng: " . $last_id;
      } else {
        echo "Lỗi chèn dữ liệu: " . mysqli_error($connect);
      }

    // if (!$query) {
    //     echo "Error inserting data: " . mysqli_error($connect);
    // };
    $cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
   foreach ($cart as $value) {
       $tensp = $value['name'];
       $image = $value['images'];
       $dongia = $value['price'];
       $soluong = $value['quantity'];
       $thanhtien = $dongia * $soluong;
    //    echo $tensp;
    //    echo $image;
    //    echo $dongia;
    //    echo $soluong;
    //    echo $thanhtien;
    $sql = "INSERT INTO cart(tensp,image,dongia,soluong,thanhtien,id_donhang) VALUES('$tensp','$image','$dongia','$soluong','$thanhtien','$last_id')";
    $query = mysqli_query($connect, $sql);
   }
  //  unset($_SESSION['cart']);
  //  header('location:index.php?act=viewcart');
}else{
  // echo "không tồn tại giỏ hàng hoặc thông tin nhận hàng";
  header('location:index.php?act=viewcart');
}
 
?>