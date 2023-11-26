<?php 
  // session_destroy();
// die();
  // Thêm sản phẩm vào giỏ hàng
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql_cart = "SELECT * FROM sanpham WHERE sp_id = $id";
    $query_cart = mysqli_query($connect,$sql_cart);

    // $quantitycart = (isset($_GET['quantity']) && $_GET['quantity'] != 0) ? $_POST['quantity'] : 1;
    // var_dump($_POST);
    // echo $id;
    if($query_cart){
      $product = mysqli_fetch_assoc($query_cart);
  
      $item = [
        'id' =>$product['sp_id'],
        'name' =>$product['sp_name'],
        'images' =>$product['sp_img'],
        'price' =>$product['sp_price'],
        'quantity' => 1
      ]; 
    }
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quantity']+= 1;
    }else{
        $_SESSION['cart'][$id] = $item;
    }
  }
  
  // Xóa sản phẩm khỏi giỏ hàng
  if(isset($_GET['id_cart'])){
    $id_delte = $_GET['id_cart'];
    unset($_SESSION['cart'][$id_delte]);
  }


 
 
  header("location: index.php?act=viewcart");
?>