<?php
require_once('../../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/admin_header.php');

$sql = "select * from tickets";
$set = query($sql);

?>

<div id="content">
  <div id="main-menu">
    <h2>Tickets</h2>
		<div class="actions">
			<a class="action" href="<?php echo url_for('/admin/tickets/new.php'); ?>">Create a new ticket</a>
		</div>

		<table class="list">
  	  <tr>
        <th>Ticket ID</th>
        <th>Device ID</th>
        <th>Studnet ID</th>
        <th>Issue</th>
  	    <th>Description</th>
		<th>Date Created</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($i = mysqli_fetch_assoc($set)) { ?>
        	<tr>
          		<td><?php echo h($i['ticketID']); ?></td>
          		<td><?php echo h($i['deviceID']); ?></td>
    			<td><?php echo h($i['studentID']); ?></td>
          		<td><?php echo h($i['issue']); ?></td>
          		<td><?php echo h($i['description']); ?></td>
		  		<td><?php echo h($i['dateCreated']); ?></td>
          		<td><a class="action" href="<?php echo url_for('/admin/tickets/show.php?id=' . h(u($i['ticketID']))); ?>">View</a></td>
          		<td><a class="action" href="<?php echo url_for('/admin/tickets/edit.php?id=' . h(u($i['ticketID']))); ?>">Edit</a></td>
          		<td><a class="action" href="<?php echo url_for('/admin/tickets/delete.php?id=' . h(u($i['ticketID']))); ?>">Delete</a></td>
    		</tr>
      <?php } ?>
  	</table>

	<div>
</div>

<?php
include(SHARED_PATH . '/admin_footer.php');
?>

