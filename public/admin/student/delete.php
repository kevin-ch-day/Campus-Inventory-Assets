<?php

require_once('../../../private/initialize.php');
$page_title = 'Delete a student';
include(SHARED_PATH . '/admin_header.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/admin/student/index.php'));
}
$id = $_GET['id'];
?>

<div id="content">
  <div id="main-menu">

<?php
if(is_post_request()){
  $sql = "DELETE FROM student WHERE student_id = $id";
  if(!query($sql)){
    echo "<h1>Error deleting student</h1>";
  }else{
    echo "<h1>Student Deleted</h1>";
  }
} else {
?>
  <h1>Delete a student</h1>
  <p>Are you sure you want to delete this student?</p>
  <form action="<?php echo url_for('/admin/student/delete.php?id='.$id); ?>" method="post">
    <div id="operations">
      <input type="submit" name="commit" value="Delete Student" />
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