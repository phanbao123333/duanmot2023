<?php 
$sql = "SELECT * FROM donhang ";
$query = mysqli_query($connect,$sql);
//  if (!$query) {
//         echo "Error inserting data: " . mysqli_error($connect);
//     };
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">   
            <h2>Quản Lý Đơn Hàng</h2>
        </div>
        <div class="card-body">
            <table class="table">
               <thead class="thead-dark">
               <tr>
                    <th>Mã Đơn Hàng</th>
                    <th>Ngày Đặt Hàng</th>
                    <th>Trạng Thái</th>
                    <th>Thêm</th>
                    <th></th>
                </tr>
               </thead>
               <tbody>
                <?php 
                while($row = mysqli_fetch_assoc($query)){?>
                <tr>
                    <td><?php echo 'VNA - ',$row['id'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo 'Null' ;?></td>
                    <td><a href="index.php?act=order_chitiet&order_id=<?php echo $row['id']?>">Xem Chi Tiết</a></td>
                    <td><a href="index.php?act=delete_donhang&id=<?php echo $row['id']?>">Xóa</a></td>
                </tr>
               <?php } ?>
               </tbody>
              
            </table>
            <a class="btn btn-primary" href="index.php?act=themsp">Thêm</a>
        </div>
    </div>
</div>