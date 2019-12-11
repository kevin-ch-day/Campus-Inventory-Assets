<?php

require_once('../../../private/initialize.php');
$page_title = 'Edit Building';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">
  <div class="main-menu">

<?php


$id = $_GET['id'];
if(is_post_request()) {

  $id = $_POST['id'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zipcode = $_POST['zipcode'];
  $dateCreated = $_POST['build_create_date'];
  $dateUpdated = date("Y-m-d");

  $sql = "update building set ";
  $sql .= "building_name = '$name', building_address = '$address' ";
  $sql .= "building_city = '$city', building_zip = '$zipcode' ";
  $sql .= "where building_id = ".$id;

} else {
  echo "<h1>Building Details</h1>";
  $sql = "select * from building where building_id = ".$_GET['id'];
  $set = query($sql);
  $i= mysqli_fetch_assoc($set);

  echo "ID: ".$i["building_id"]."<br/>";
  echo "Name: ".$i["building_name"]."<br/>";
  echo "Address: ".$i["building_address"]."<br/>";
  echo "City: ".$i["building_city"]."<br/>";
  echo "State: ".$i["building_state"]."<br/>";
  echo "Zipcode: ".$i["building_zip"]."<br/><br/><br/>";
?>

    <form action="<?php echo url_for('/admin/building/edit.php'); ?>" method="post">
      <fieldset>
      <legend>Update Building Information</legend>
      Name: <input type="text" name="name"><br/>
      Address: <input type="text" name="address"><br/>
      City: <input type="text" name="city"><br/>
      State: <input type="text" name="state"><br/>
      Zipcode: <input type="text" name="zipcode"><br/>
      <input type="hidden" name="id" value="<?php echo $i["building_id"]?>"><br/>
      <input type="hidden" name="date_created" value="<?php echo $i["build_create_date"]?>">
      </fieldset>
    </form>
<?php } ?>
  </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
