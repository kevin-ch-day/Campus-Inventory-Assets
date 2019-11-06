<?php

require_once('../../../private/initialize.php');

$page_title = 'Warranty';
include(SHARED_PATH . '/admin_header.php');

$sql ="select * from warranty";
$advisor_set = query($sql);
?>

<div id="content">
  <div class="pages listing">
    <h1>Warranty</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/admin/warranty/new.php'); ?>">Create a new warranty</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Original Date</th>
        <th>End Date</th>
        <th>Type</th>
  	    <th>Available Users</th>
        <th>Created</th>
        <th>Updateded</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($index = mysqli_fetch_assoc($advisor_set)) { ?>
        <tr>
          <td><?php echo h($index['warranty_id']); ?></td>
          <td><?php echo h($index['war_originalDate']); ?></td>
    	    <td><?php echo h($index['war_endDate']); ?></td>
          <td><?php echo h($index['war_type']); ?></td>
          <td><?php echo h($index['war_available_uses']); ?></td>
          <td><?php echo h($index['war_create_date']); ?></td>
          <td><?php echo h($index['war_update_date']); ?></td>
          <td><a class="action" href="<?php echo url_for('/admin/warranty/show.php?id=' . h(u($index['warranty_id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/admin/warranty/edit.php?id=' . h(u($index['warranty_id']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/admin/warranty/delete.php?id=' . h(u($index['warranty_id']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
