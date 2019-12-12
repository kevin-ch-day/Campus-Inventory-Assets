<?php
require_once('../../../private/initialize.php');
$page_title = 'Advisors';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">
  <div class="pages listing">

<?php
if(is_get_request()){
    
    $sql = "select * from student where student_id = ".$_GET['id'];
    $set = query($sql);
    $i = mysqli_fetch_assoc($set);
    echo "<h1>Student Data</h1>";
    echo "ID: ".$i['student_id']."<br/>";
    echo "Name: ".getStudentName($i['student_id'])."<br/>";
    echo "Graduation Year: ".$i['grad_year']."<br/>";
    echo "Created: ".$i['stu_date_created']."<br/>";
    echo "Updated: ";
    if($i['stu_date_created'] != null){
        echo $i['stu_date_created'];
    }else{
        echo "Not updated";
    }

    echo "<h1>Assigned Devices</h1>";
    $sql = "select * from deployment where student_id = ".$_GET['id'];
    $set = query($sql);
    while($i = mysqli_fetch_assoc($set)) {
        $sql ="select * from asset where asset_id = ".$i["asset_id"];
        $temp = query($sql);
        while($x = mysqli_fetch_assoc($temp)) {
            echo "ID: ".$x['asset_id']." Brand: ".$x['brand']." Model: ".$x['model'];
            echo " Serial # ".$x['serialNumber']."<br/>";
        }
    }

}else{
    echo "<h1>Error: no student selected</h1>";
}
?>
  </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
