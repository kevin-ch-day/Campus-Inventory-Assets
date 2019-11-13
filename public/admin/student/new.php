<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {

  $studentID = $_POST["studentID"];
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $gradYear = $_POST["gradYear"];
  $advisorId = $_POST["advisorId"];
  $date = date("Y-m-d");

  $sql = "INSERT INTO student (student_id, student_fname, student_lname, grad_year, advisor_id, stu_date_created) ";
  $sql .= "VALUES ('$studentID', '$fname', '$lname', '$gradYear', '$gradYear', '$advisorId', '$date')";
  
  query($sql);

} else {
  // to do
}

$page_title = 'Create a Student';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/admin/student/index.php'); ?>">&laquo; Back to List</a>

  <div class="page new">
    <h1>Create Student</h1>
    <form action="<?php echo url_for('/admin/student/new.php'); ?>" method="post">
      Student ID: <input type ="text" name="studentID"><br>
      First Name: <input type ="text" name="fname"><br>
      Last Name: <input type ="text" name="lname"><br>
      Graduation Year: <input type ="text" name="gradYear"><br>
      Advisor ID: <input type ="text" name="advisorID"><br>
      <button type="submit" value="Submit">Submit</button>
      <button type="reset" value="Reset">Reset</button>
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
