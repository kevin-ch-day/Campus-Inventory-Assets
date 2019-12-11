<?php

require_once('../../../private/initialize.php');
$page_title = 'Building Information';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">
  <div id="main-menu">
    <h1>Building Information</h1>
<?php
$sql = "select * from building where building_id = ".$_GET['id'];
$set = query($sql);
$i= mysqli_fetch_assoc($set);
echo "ID: ".$i["building_id"]."<br/>";
echo "Name: ".$i["building_name"]."<br/>";
echo "Address: ".$i["building_address"]."<br/>";
echo "City: ".$i["building_city"]."<br/>";
echo "State: ".$i["building_state"]."<br/>";
echo "Zipcode: ".$i["building_zip"]."<br/>";
?>
    <button onclick="window.history.go(-1); return false;">Back</button> 
  </div>
</div>

<?php
include(SHARED_PATH . '/admin_footer.php');
?>