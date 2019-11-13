<?php
require_once('../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/header.php');
?>

<div id="content">
  <div id="main-menu">
  <h1>Facility Menu</h1>
	<ul>
		<li><a href="createTicket.php">Create a ticket</a></li>
		<li><a href="assignDevice.php">Assign a student a device</a></li>
	</ul>
  </div>
</div>

<?php
include(SHARED_PATH . '/footer.php');
?>