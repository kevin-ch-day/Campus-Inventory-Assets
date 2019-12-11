<?php
require_once('../../private/initialize.php');
$page_title = 'Staff Menu';
include(SHARED_PATH . '/facility_header.php');
$refreshTime = 1;
?>

<div id="content">
    <div id="main-menu">
<?php

if(isset($_POST['studentId'])){

    $student_id = $_POST['studentId'];
    if(!checkStudentID($student_id)){
        echo "<h1>Invalid Student ID</h1>";

    }else{
        echo "<h1>Valid Studnet ID</h1>";
    }

}else if(!isset($_GET['id'])){
    echo "<h1>Error no device selected</h1>";
    echo "<h3>Returning to staff menu</h3>";
    header('Refresh: '.$refreshTime.'; URL = index.php');

}else{
    $sql = "select asset_id, serialNumber, brand from asset";
    $set = query($sql);
	$i = mysqli_fetch_assoc($set);

    echo "<h1>Asset Information</h1>";
    echo "Asset ID ".$i['asset_id']."<br/>";
    echo "Brand ".$i['brand']."<br/>";
    echo "Serial # ".$i['serialNumber']."<br/>";
?>
    <br/>
    <form action="<?php echo url_for('/facility/assignStudentDevice.php'); ?>" method="post">
        <fieldset>
            <legend>Enter Student ID</legend>
            Student ID: <input type="text" name="studentId"><br/>
            <button onclick="window.history.go(-1); return false;">Back</button> 
            <input type="submit" value="Submit">
        </fieldset>
    </form>

<?php
}
?>
	</div>
</div>

<?php
include(SHARED_PATH . '/facility_footer.php');
?>

