<?php

require_once('../../../private/initialize.php');
$page_title = 'Edit Repair Ticket';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">
  <div class="main-menu">

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

if(is_post_request()) {

    $id = $_POST['id'];
    $device = $_POST['deviceId'];
    $student = $_POST['studentId'];
    $asset = $_POST['deviceId'];
    $description = $_POST['description'];
    //$start = $_POST['date_created'];
    //$complete = $_POST['zipcode'];
    //$dateUpdated = date("Y-m-d");

  $sql = "update repair set ";
  $sql .= "student_id='$student', asset_id='$asset', repair_description='$description' ";
  $sql .= "where repair_id = ".$id;

  if(!query($sql)){
    echo "<h1>Error updating the ticket</h1>";
    redirect_to(url_for('/admin/tickets/index.php'));
  }else{
    echo "<h1>Ticket has been updated</h1>";
    redirect_to(url_for('/admin/tickets/index.php'));
  }

} else {
    $sql = "select * from repair where repair_id = ".$id;
    $set = query($sql);
    $i = mysqli_fetch_assoc($set);
    echo "<h1>Repair Ticket</h1>";
    echo "Repair ID: ".$i['repair_id']."<br/>";
    echo "<b>Student</b><br/>ID: ".$i['student_id']."<br/>";
    echo "Name: ".getStudentName($i['student_id'])."<br/>";
    echo "<b>Asset</b><br/>".getAssetInfo($i['asset_id'])."<br/>";
    echo "<b>Description</b></br>".$i['repair_description']."<br/>";
    echo "Date Submitted: ".$i['repair_start_date']."<br/>";
    echo "Date Completed: ".$i['repair_complete_date']."<br/>";
?>

    <form action="<?php echo url_for('/admin/tickets/edit.php'); ?>" method="post">
      <fieldset>
      <legend>Update Building Information</legend>
            Device ID: <input type="text" name="deviceId"><br/>
		    Student ID: <input type="text" name="studentId"><br/>
		    <textarea id="description" name="description" placeholder="Problem Description" style="height:170px"></textarea><br/>
            <input type="hidden" name="id" value="<?php echo $i["repair_id"]?>"><br/>
            <input type="hidden" name="date_created" value="<?php echo $i["repair_start_date"]?>">
            <input type="hidden" name="date_completed" value="<?php
                if($i["repair_complete_date"] != null){
                    echo $i["repair_complete_date"];
                }else{
                    echo "Not completed";
                }?>">
            <input type="submit" value="Submit">
      </fieldset>
    </form><br/>
<?php } ?>
  </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
