<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {
  
  $id = $_POST["warrantyID"];
  $type = $_POST["type"];
  $orgDate = $_POST["OriginalDate"];
  $endDate = $_POST["endDate"];
  $availableUsers = $_POST["avaiableUsers"];

} else {
  // to do
}

$page_title = 'Create a new warranty';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">
  <a class="back-link" href="<?php echo url_for('/admin/warranty/index.php'); ?>">&laquo; Back to List</a>

  <div class="main-menu">
    <h1>Create a new warranty</h1>
    <form action="<?php echo url_for('/admin/building/new.php'); ?>" method="post">
      Warranty ID:<input type ="text" name="warrantyID"><br/>
      Type:<input type ="text" name="type"><br/>
      Original Date:<input type ="text" name="OriginalDate"><br/>
      End Date:<input type ="text" name="endDate"><br/>
      Available Users:<input type ="text" name="avaiableUsers"><br/>
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
