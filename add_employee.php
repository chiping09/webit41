<?php
    include 'navbar.php';
    require_once 'config.php';
    if(isset($_POST['submit'])){
        $emp_id=$_POST['emp_id'];
        $emp_name=$_POST['emp_name'];
        $telephone=$_POST['telephone'];
        $email=$_POST['email'];
        if($emp_id=='' || $emp_name=='' || $telephone==''|| $email==''){
            echo "<script>alert('คุณยังไม่ได้กรอกข้อมูล')</script>";
        }else{
            $sql="INSERT INTO employee VALUES('$emp_id','$emp_name','$telephone','$email')";
            $result=$con->query($sql);
            if(!$result){
                echo "<script>alert('ERROR: ไม่สารารถเพิ่มข้อมูลได้ กรุณาตรวจสอบขอผิดพลาด')</script>";
            }else{
                echo "<script>window.location.href='employee.php'</script>";
            }
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
        <div class="container w-25 mt-5">
            <div class="card">
                <div class="card-header bg-primary text-white">เพิ่มข้อมูลพนักงาน</div>
                <div class="card-body">
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                        <div class="mb-3">
                            <label for=""class="form-label">รหัสพนักงาน</label>
                            <input type="text" class="form-control" name="emp_id">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label">ชื่อพนักงาน</label>
                            <input type="text" class="form-control" name="emp_name">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="telephone">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label">email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label"></label>
                            <input type="submit" class="btn btn-primary" name="submit" value="เพิ่มข้อมูล">
                        </div>
                    </form>
                </div>
            </div>
        </div>
  </body>
</html>