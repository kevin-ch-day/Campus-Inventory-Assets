<?php

require_once('../../../private/initialize.php');

$page_title = 'Advisors';
include(SHARED_PATH . '/admin_header.php');

$sql = "select * from student";
$student_set = query($sql);
?>

<div id="content">
  <div class="pages listing">
    <h1>Students</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/admin/student/new.php'); ?>">Create a new student</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Graduation Year</th>
        <th>Advisor ID</th>
  	    <th>Created</th>
        <th>Updated</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($index = mysqli_fetch_assoc($student_set)) { ?>
        <tr>
          <td><?php echo h($index['student_id']); ?></td>
          <td><?php echo h($index['student_fname']); ?></td>
    	    <td><?php echo h($index['student_lname']); ?></td>
          <td><?php echo h($index['grad_year']); ?></td>
          <td><?php echo h($index['advisor_id']); ?></td>
          <td><?php echo h($index['stu_date_created']); ?></td>
          <td><?php echo h($index['stu_date_updated']); ?></td>
          <td><a class="action" href="<?php echo url_for('/admin/adivsor/show.php?id=' . h(u($index['advisor_id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/admin/adivsor/edit.php?id=' . h(u($index['advisor_id']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/admin/adivsor/delete.php?id=' . h(u($index['advisor_id']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
