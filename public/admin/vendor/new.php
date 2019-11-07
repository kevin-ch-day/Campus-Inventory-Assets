<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {
  $id = $_POST["advisorId"];
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $street = $_POST["street"];
  $city = $_POST["city"];
  $phone = $_POST["phone"];
  $date = date("Y-m-d");
} else {
  // to do
}

$page_title = 'Add a new Vendor';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/admin/vendor/index.php'); ?>">&laquo; Back to List</a>

  <div class="page new">
    <h1>Add a Vendor</h1>
    <form action="<?php echo url_for('/admin/building/new.php'); ?>" method="post">
      Vendor ID:<input type ="text" name="id"><br>
      Vendor Name:<input type ="text" name="fname"><br>
      Vendor Contact:<input type ="text" name="lname"><br>
      Vendor Street:<input type ="text" name="street"><br>
      Vendor City:<input type ="text" name="city"><br>
      Vendor Phone:<input type ="text" name="phone"><br>
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
