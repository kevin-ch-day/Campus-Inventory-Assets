<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {
  $name = $_POST["building_name"];
  $city = $_POST["building_city"];
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
      Building Name: <input type ="text" name="building_name"><br>
      Building City: <input type ="text" name="building_city"><br>
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
