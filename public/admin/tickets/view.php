<?php
require_once('../../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/admin_header.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
}
?>

<div id="content">
  <div id="main-menu">

<?php
if(is_get_request()){
    $sql = "select * from repair where repair_id = ".$id;
    $set = query($sql);
    $i = mysqli_fetch_assoc($set);
    echo "<h1>Repair Ticket</h1>";
    echo "Repair ID: ".$i['repair_id']."<br/><br/>";
    echo "<b>Student</b><br/>ID: ".$i['student_id']."<br/>";
    echo "Name: ".getStudentName($i['student_id'])."<br/><br/>";
    echo "<b>Asset</b><br/>".getAssetInfo($i['asset_id'])."<br/><br/>";
    echo "<b>Description</b></br>".$i['repair_description']."<br/><br/>";
    echo "Date Submitted: ".$i['repair_start_date']."<br/>";
    echo "Date Completed: ".$i['repair_complete_date']."<br/>";
?>
    <button onclick="window.history.go(-1); return false;">Back</button> 
<?php

}else{
    echo "<h1>Error: no repair ticket selected</h1>";
}
?>
	</div>
</div>

<?php
include(SHARED_PATH . '/admin_footer.php');
?>

