<?php
    include 'navbar.php';
    require_once 'config.php';
    $keyword=$_POST['keyword'];
    $sql="SELECT * FROM product WHERE pro_id like '%$keyword%' OR pro_name like '%$keyword%'";
    $result=$con->query($sql);
?>
<div class="container w-50 mt-5">
    <div class="row d-flex justify-content-between">
        <div class="col-auto">
        <a href="add_product.php" class="btn btn-success mb-3">+เพิ่มข้อมูล</a>
        </div>
        <div class="col-auto">
            <form action="search_pro.php" class="row" method="post">
                <div class="col-auto">
                    <input type="text" class="from-control" name="keyword" placeholder="ใส่รหัสหรือชื่อสินค้า">
                </div>
                <div class="col-auto">
                    <button type="submit" name="search" class="btn btn-success">ค้นหา</button>
                </div>
            </form>
        </div>
    <div class="card">
        <div class="card-header bg-primary text-white">ข้อมูลสินค้า</div>
        <div class="card-body">
            <table class="table table-striped">
                <tr class="bg-info">
                    <td class="text-white">ลำดำที่</td>
                    <td class="text-white">รหัสสินค้า</td>
                    <td class="text-white">ชื่อสินค้า</td>
                    <td class="text-white">จำนวน</td>
                    <td class="text-white">ราคา</td>
                    <td class="text-white">การจัดการ</td>
                </tr>
                <?php
                    $i=1;
                    while($row=mysqli_fetch_array($result)){


                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['pro_id']?></td>
                    <td><?php echo $row['pro_name']?></td>
                    <td><?php echo $row['amount']?></td>
                    <td><?php echo $row['price']?></td>
                    <td>
                        <a href="edit_pro.php?pro_id=<?php echo $row['pro_id']?>" class="btn btn-success">แก้ไข</a>
                        <a href="del_pro.php?pro_id=<?php echo $row['pro_id']?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบใช่ไหม?')">ลบ</a>
                    </td>
                </tr>
                <?php
                    $i++; 
                    }
                ?>
            </table>
        </div>
    </div>
</div>