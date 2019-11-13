<?php
require_once('../../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">
  <div id="main-menu">
    <h2>Tickets</h2>
		<div class="actions">
			<a class="action" href="<?php echo url_for('/admin/tickets/new.php'); ?>">Create a new ticket</a>
		</div>
</div>

<?php
include(SHARED_PATH . '/admin_footer.php');
?>

