<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {
  $id = $_POST["advisorId"];
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $date = date("Y-m-d");
} else {
  // to do
}

$page_title = 'Create a Student';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/admin/building/index.php'); ?>">&laquo; Back to List</a>

  <div class="page new">
    <h1>Create Student</h1>
    <form action="<?php echo url_for('/admin/building/new.php'); ?>" method="post">
      Student ID:<input type ="text" name="studentID"><br>
      First Name:<input type ="text" name="fname"><br>
      Last Name:<input type ="text" name="lname"><br>
      Graduation Year:<input type ="text" name="gradYear"><br>
      Advisor ID:<input type ="text" name="advisorID"><br>
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
