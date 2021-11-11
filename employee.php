<?php
    include 'navbar.php';
    require_once 'config.php';
    $sql="SELECT * FROM employee order by emp_id DESC";
    $result = $con->query($sql);
?>
<div class="container w-50 mt-5">
<a href="add_employee.php" class="btn btn-success">+เพิ่มข้อมูล</a>
    <div class="card">
        <div class="card-header bg-primary text-white">ข้อมูลพนักงาน</div>
        <div class="card-body">
            <table class="table table-striped">
                <tr class="bg-info">
                    <td class="text-white">ลำดำที่</td>
                    <td class="text-white">รหัสพนักงาน</td>
                    <td class="text-white">ชื่อพนักงาน</td>
                    <td class="text-white">เบอร์โทรศัพท์</td>
                    <td class="text-white">อีเมล</td>
                </tr>
                <?php
                    $i=1;
                    while($row=mysqli_fetch_array($result)){


                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['emp_id']?></td>
                    <td><?php echo $row['emp_name']?></td>
                    <td><?php echo $row['telephone']?></td>
                    <td><?php echo $row['email']?></td>
                </tr>
                <?php
                    $i++; 
                    }
                ?>
            </table>
        </div>
    </div>
</div>