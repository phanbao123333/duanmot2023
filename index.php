<?php 
ob_start();
session_start();

?>
<?php 
include "connect/connect_db.php";
include "view/header.php";
?>
<?php 
if(isset($_GET['act'])){
    switch($_GET['act']){
        case 'viewtimkiem':
            include "View/viewtimkiem.php";
            break;
        case 'detail':
            include "View/detail.php";
            break;  
        case 'viewdetail':
            include "View/viewdetail.php";
            break; 
        case 'cart':
            include "View/cart.php";
            break;
        case 'viewcart':
            include "View/viewcart.php";
            break;
        case 'contact':
            include "View/contact.php";
            break;
        case 'viewdanhmuc':
            include "View/viewdanhmuc.php";
            break;
        case 'db_donhang':
            include "View/db_donhang.php";
            break;
        case 'form_thongtin':
            include "View/form_thongtin.php";
            break;
        case 'login':
            include "View/login.php";
            break;
        case 'signup':
            include "View/signup.php";
            break;
            
        default :
            include "index.php";
       }
       
}else{
    include "view/home.php";
}
include "view/footer.php";  


?>