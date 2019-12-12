<?php
require_once('../../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/admin_header.php');

$sql = "select * from repair";
$set = query($sql);

?>

<div id="content">
  <div id="main-menu">
    <h2>Tickets</h2>
		<div class="actions">
			<a class="action" href="<?php echo url_for('/admin/tickets/createTicket.php'); ?>">Create a new ticket</a>
		</div>

		<table class="list">
  	  <tr>
        <th>Repair ID</th>
        <th>Student ID</th>
        <th>Asset ID</th>
  	    <th>Description</th>
		<th>Start Date</th>
		<th>Complete Date</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($i = mysqli_fetch_assoc($set)) { ?>
        	<tr>
          		<td><?php echo h($i['repair_id']); ?></td>
          		<td><?php echo h($i['student_id']); ?></td>
    			<td><?php echo h($i['asset_id']); ?></td>
          		<td><?php echo h($i['repair_description']); ?></td>
          		<td><?php echo h($i['repair_start_date']); ?></td>
				  <td><?php
				  if(h($i['repair_complete_date']) == "0000-00-00"){
					echo "Not Completed";
				  }else{
					echo h($i['repair_complete_date']);
				  }; ?></td>
          		<td><a class="action" href="<?php echo url_for('/admin/tickets/view.php?id=' . h(u($i['repair_id']))); ?>">View</a></td>
          		<td><a class="action" href="<?php echo url_for('/admin/tickets/edit.php?id=' . h(u($i['repair_id']))); ?>">Edit</a></td>
          		<td><a class="action" href="<?php echo url_for('/admin/tickets/delete.php?id=' . h(u($i['repair_id']))); ?>">Delete</a></td>
    		</tr>
      <?php } ?>
  	</table>

	<div>
</div>

<?php
include(SHARED_PATH . '/admin_footer.php');
?>

