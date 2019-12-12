<?php

require_once('../../../private/initialize.php');
$page_title = 'Delete a Repair Ticket';
include(SHARED_PATH . '/admin_header.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/admin/tickets/index.php'));
}
$id = $_GET['id'];
?>

<div id="content">
  <div id="main-menu">

<?php
if(is_post_request()){
  $sql = "DELETE FROM repair WHERE repair_id = $id";
  if(!query($sql)){
    echo "<h1>Error deleting ticket</h1>";
    redirect_to(url_for('/admin/tickets/index.php'));
    
  }else{
    echo "<h1>Ticket Deleted</h1>";
    redirect_to(url_for('/admin/tickets/index.php'));
  }
} else {
?>
  <h1>Delete a repair ticket</h1>
  <p>Are you sure you want to delete this ticket?</p>
  <form action="<?php echo url_for('/admin/tickets/delete.php?id='.$id); ?>" method="post">
    <div id="operations">
      <input type="submit" name="commit" value="Delete Ticket" />
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