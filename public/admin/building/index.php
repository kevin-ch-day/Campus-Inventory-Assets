<?php

require_once('../../../private/initialize.php');

$page_title = 'Building';
include(SHARED_PATH . '/admin_header.php');

$sql = "select * from building";
$building_set = query($sql);

?>

<div id="content">
  <div class="pages listing">
    <h1>Buildings</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/admin/building/new.php'); ?>">Create a new building</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Name</th>
        <th>City</th>
        <th>Created</th>
  	    <th>Updated</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($building = mysqli_fetch_assoc($building_set)) { ?>
        <tr>
          <td><?php echo h($building['building_id']); ?></td>
          <td><?php echo h($building['building_name']); ?></td>
    	    <td><?php echo h($building['building_city']); ?></td>
          <td><?php echo h($building['build_create_date']); ?></td>
          <td><?php echo h($building['build_update_date']); ?></td>
          <td><a class="action" href="<?php echo url_for('/admin/building/show.php?id=' . h(u($building['building_id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/admin/building/edit.php?id=' . h(u($building['building_id']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/admin/building/delete.php?id=' . h(u($building['building_id']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
  </div>
</div>

<?php
include(SHARED_PATH . '/admin_footer.php');
?>
