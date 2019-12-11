<?php

require_once('../../../private/initialize.php');
$page_title = 'Delete a building';
include(SHARED_PATH . '/admin_header.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/admin/building/index.php'));
}
$id = $_GET['id'];
?>

<div id="content">
  <div id="main-menu">

<?php
if(is_post_request()){
  // building as deleted
  $sql = "DELETE FROM building WHERE building_id = $id";
  if(!query($sql)){
    echo "<h1>Error deleting building</h1>";
  }else{
    echo "<h1>Building Deleted</h1>";
  }
} else {
?>
  <h1>Delete a bulding</h1>
  <p>Are you sure you want to delete this building?</p>
  <form action="<?php echo url_for('/admin/building/delete.php?id='.$id); ?>" method="post">
    <div id="operations">
      <input type="submit" name="commit" value="Delete Bulding" />
    </div>
  </form>
<?php
}
?>
  </div>
</div>

<?php
include(SHARED_PATH . '/admin_footer.php');
?>