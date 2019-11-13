<?php
require_once('../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">
  <div id="main-menu">
    <h2>Create a Ticket</h2>
	<form action="<?php echo url_for('/admin/facility/createTicket.php'); ?>" method="post">
		Device ID: <input type="text" name="studentId"><br/>
		Student ID: <input type="text" name="studentId"><br/>
		Issue: <select name="issues">
			<option value="screen">Broken Screen</option>
			<option value="keyboard">Keyboard Issue</option>
			<option value="network">No Internet Connection</option>
			<option value="power">Will not turn on</option>
			<option value="other">Other</option>
		</select><br/>
		<textarea id="description" name="description" placeholder="Problem Description" style="height:170px"></textarea><br/>
		<input type="submit" value="Submit">
    </form>
</div>

<?php
include(SHARED_PATH . '/admin_footer.php');
?>

