<?php
    include 'navbar.php';
    require_once 'config.php';
    $selected_id=$_GET['emp_id'];
    $old_data=mysqli_fetch_array($con->query("SELECT * FROM employee WHERE emp_id='$selected_id'"));
    if(isset($_POST['submit'])){
        $emp_id=$_POST['emp_id'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $emp_name=$_POST['emp_name'];
        $telephone=$_POST['telephone'];
        $email=$_POST['email'];
        //$safe_pass=md5($password);
        $upd_data=$con->query("UPDATE employee SET emp_id='$emp_id',username='$username',password='$password',emp_name='$emp_name',telephone='$telephone',email='$email' WHERE emp_id='$selected_id'");
        if(!$upd_data){
            echo "<script>
                    alert('ไม่สามารถแก้ไขข้อมูลได้');
                    window.history.back();
                  </script>";
        }else{
            header('location:employee.php');
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
                            <label for=""class="form-label">รหัสพนักงาน</label>
                            <input type="text" class="form-control" name="emp_id" value="<?php echo $old_data['emp_id']?>">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label">username</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $old_data['username']?>">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label">password</label>
                            <input type="password" class="form-control" name="password" value="<?php echo $old_data['password']?>">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label">ชื่อพนักงาน</label>
                            <input type="text" class="form-control" name="emp_name" value="<?php echo $old_data['emp_name']?>">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="telephone" value="<?php echo $old_data['telephone']?>">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label">email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $old_data['email']?>">
                        </div>
                        <div class="mb-3">
                            <label for=""class="form-label"></label>
                            <input type="submit" class="btn btn-primary" name="submit" value="แก้ไขข้อมูล">
                        </div>
                    </form>
                </div>
            </div>
        </div>