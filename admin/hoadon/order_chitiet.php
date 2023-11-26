<?php 
if(isset($_GET['order_id'])){
$id_order = $_GET['order_id'];
$sql = "SELECT * FROM donhang WHERE id = $id_order ";
$query_khachhang = mysqli_query($connect, $sql);

$sql_dsdh = "SELECT * FROM cart WHERE id_donhang = $id_order";
$query_dsdh = mysqli_query($connect, $sql_dsdh);

 if (!$query_khachhang) {
        echo "Error inserting data: " . mysqli_error($connect);
    };
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">   
            <h2>Thông Tin Đơn Hàng</h2>
        </div>
        <div class="card-body">
            <table class="table">
               <thead class="thead-dark">
               <?php 
                while($row = mysqli_fetch_assoc($query_khachhang)){?>
               <tr>
                   <p>Tên Khách Hàng: <?php echo $row['name'] ?></p>
                    <p>Số điện thoại: <?php echo $row['phone']; ?></p>
                    <p>Email: <?php echo $row['email'] ;?></p>
                    <p>Địa Chỉ: <?php echo $row['address'] ;?></p>

                     <!-- <p>Thêm</p> -->
                    <!-- <p>Loại Danh Mục</p>
                    <p>Sửa</p>
                    <p>Xóa</p>  -->
                </tr>
                <?php } ?>
               </thead>
               <tbody>
               
               </tbody>  
            </table>     
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">   
            <h2>Danh Sách Đơn Hàng</h2>
        </div>
        <div class="card-body">
            <table class="table">
               <thead class="thead-dark">
               <tr>
                   <th>Tên Sản Phẩm</th>
                    <th>Hình Ảnh</th>
                    <th>Đơn Giá</th>
                    <th>Số Lượng</th>
                    <th>Thành Tiền</th>
                    <!-- <th>Tổng Đơn Hàng</th> -->
                     <!-- <p>Thêm</p> -->
                    <!-- <p>Loại Danh Mục</p>
                    <p>Sửa</p>
                    <p>Xóa</p>  -->

                </tr>
               </thead>
               <tbody>
                <?php 
                while($row = mysqli_fetch_assoc($query_dsdh)){?>
                <tr>
                    <td><?php echo $row['tensp'] ?></td>
                    <td><img src="img/<?php echo $row['image']; ?>" width="70" height="60" ></td>
                    <td><?php echo $row['dongia'] ;?></td> 
                    <td><?php echo $row['soluong'] ;?></td> 
                    <td><?php echo $row['thanhtien'] ;?></td> 

                    <!-- <p><a href="index.php?act=order_chitiet">Xem Chi Tiết</a></p> -->
                </tr>
                
               <?php } ?>
               <!-- <th style="">$$$</th> -->
               </tbody>
              
            </table>
            <a class="btn btn-primary right" href="index.php?act=order">Quay Lại</a>
        </div>
    </div>
</div>