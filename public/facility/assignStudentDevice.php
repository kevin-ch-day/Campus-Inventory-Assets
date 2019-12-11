<?php
require_once('../../private/initialize.php');
$page_title = 'Staff Menu';
include(SHARED_PATH . '/facility_header.php');
$refreshTime = 1;
?>

<div id="content">
    <div id="main-menu">
<?php

if(isset($_POST['student_id']) && isset($_POST['return_date'])){

    $student_id = $_POST['student_id'];
    $return_date = $_POST['return_date'];
    $asset_id = $_POST['asset_id'];

    if(!checkStudentID($student_id)){
?>
        <h1>Invalid Student ID</h1>
        <button onclick="window.history.go(-1); return false;">Back</button>
<?php
    }else{
        $sql = "insert into deployment (student_id, asset_id, deploy_date, return_date)";
        $sql .= "values('$student_id', '$asset_id', '".date("Y-m-d")."', '$return_date')";
        if(query($sql)){
            echo "<h1>Device has been deployed</h1>";
            echo "<p>Returning to facility home page</p>";
            header('Refresh: '.$refreshTime.'; URL = index.php');
        }else{
            echo "<h1>Error deploying device</h1>";
        }
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
            Student ID: <input type="text" name="student_id"><br/>
            Return Date: <input type="text" name="return_date"><br/>
            <input type="hidden" name="asset_id" value="<?php echo $_GET['id']?>">
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

