<?php
require_once('../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>

    <p>Data Menu</p>
    <ul>
      <li><a href="<?php echo url_for('/admin/building/index.php'); ?>">Building</a></li>
	    <li><a href="<?php echo url_for('/admin/advisor/index.php'); ?>">Advisor</a></li>
	    <li><a href="<?php echo url_for('/admin/student/index.php'); ?>">Student</a></li>
	    <li><a href="<?php echo url_for('/admin/vendor/index.php'); ?>">Vendor</a></li>
	    <li><a href="<?php echo url_for('/admin/warranty/index.php'); ?>">Warranty</a></li>
    </ul>
    <p>Admin Menu</p>
    <ul>
      <li><a href="<?php echo url_for('/admin/users/index.php'); ?>">Users</a></li>
      <li><a href="<?php echo url_for('/admin/tickets/index.php'); ?>">Tickets</a></li>
    </ul>
  </div>
</div>

<?php
include(SHARED_PATH . '/admin_footer.php');
?>

