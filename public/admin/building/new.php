<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {
  $buildingId = $_POST["buildingId"];
  $name = $_POST["name"];
  $city = $_POST["city"];
  $date = date("Y-m-d");

  $sql = "INSERT INTO building (building_id, building_name, building_city, build_create_date) VALUES ('$buildingId', '$name', '$city', '$date')";
  query($sql);
} else {
  // to do
}

$page_title = 'Create a Building';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/admin/building/index.php'); ?>">&laquo; Back to List</a>

  <div class="page new">
    <h1>Create Building</h1>
    <form action="<?php echo url_for('/admin/building/new.php'); ?>" method="post">
      Building ID: <input type ="text" name="buildingId"><br>
      Building Name: <input type ="text" name="name"><br>
      Building City: <input type ="text" name="city"><br>
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
