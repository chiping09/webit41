<?php
    include 'navbar.php';
    require_once 'config.php';
    $selected_id=$_GET['pro_id'];
    $old_data=mysqli_fetch_array($con->query("SELECT * FROM product WHERE pro_id='$selected_id'"));
    if(isset($_POST['submit'])){
        $pro_id=$_POST['pro_id'];
        $pro_name=$_POST['pro_name'];
        $amount=$_POST['amount'];
        $price=$_POST['price'];
        $upd_data=$con->query("UPDATE product SET pro_id='$pro_id',pro_name='$pro_name',amount='$amount',price='$price' WHERE pro_id='$selected_id'");
        if(!$upd_data){
            /*echo "<script>
                    alert('ไม่สามารถแก้ไขข้อมูลได้');
                    window.history.back();
                  </script>";*/
        }else{
            header('location:product.php');
            //echo "<scritp>window.location.href='employee.php';</scritp>";
            //echo "<META HTTO-EQUIV='Refresh' CONTENT='0;URL=employee.php'>";
        }
    }
?>
<div class="container w-25 mt-5">
            <div class="card">
                <div class="card-header bg-primary text-white">เพิ่มข้อมูลพนักงาน</div>
                <div class="card-body">
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                        <div class="mb-3">
                            <label for=""class="form-label">รหัสสินค้า</label>
                            <input type="text" class="form-control" name="pro_id" value="<?php echo $old_data['pro_id']?>">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label">ชื่อสินค้า</label>
                            <input type="text" class="form-control" name="pro_name" value="<?php echo $old_data['pro_name']?>">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label">จำนวน</label>
                            <input type="text" class="form-control" name="amount" value="<?php echo $old_data['amount']?>">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label">ราคา</label>
                            <input type="text" class="form-control" name="price" value="<?php echo $old_data['price']?>">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label"></label>
                            <input type="submit" class="btn btn-primary" name="submit" value="แก้ไขข้อมูล">
                        </div>
                    </form>
                </div>
            </div>
        </div>