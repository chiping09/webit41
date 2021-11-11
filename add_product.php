<?php
include 'navbar.php';
     require_once 'config.php';
     if(isset($_POST['submit'])){
         $pro_id=$_POST['pro_id'];
         $pro_name=$_POST['pro_name'];
         $amount=$_POST['amount'];
         $price=$_POST['price'];
         if($pro_id=='' || $pro_name==''|| $amount==''|| $price==''){
             echo "<script>alert('คุณยังไม่ได้กรอกข้อมูล')</script>";
         }else{
         $sql="INSERT INTO product VALUES('$pro_id','$pro_name','$amount','$price')";
            $resualt=$con->query($sql);
            if(!$resualt){
                echo "<script>alert('ERROR:ไม่สามารถเพิ่มข้อมูลได้ กรุณาตรวจสอบความผิดพลาด');</script>";
            }else{
                echo "<script>window.location.href='product.php'</script>";
            }
         }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container w-25 mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">เพิ่มข้อมูลสินค้า</div>
            <div class="card-body">
              <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">รหัสสินค้า</label>
                        <input type="text" class="form-control" name="pro_id">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">ชื่อสินค้า</label>
                        <input type="text" class="form-control" name="pro_name">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">จำนวน</label>
                        <input type="text" class="form-control" name="amount">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">ราคา</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"></label>
                        <input type="submit" class="btn btn-primary" name="submit" value="เพิ่มข้อมูล">
                    </div>
              </form>
                </div>
        </div>
    </div>
</body>

</html>