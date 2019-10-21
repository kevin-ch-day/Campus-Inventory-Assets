<?php

require_once('../../../private/initialize.php');

$page_title = 'Vendors';
include(SHARED_PATH . '/admin_header.php');

$sql = "select * from vendor";
$vendor_set = query($sql);
?>

<div id="content">
  <div class="pages listing">
    <h1>Vendors</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/admin/building/new.php'); ?>">Create a new vendor</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Street</th>
  	    <th>City</th>
        <th>Phone</th>
        <th>Created</th>
        <th>Updated</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($index = mysqli_fetch_assoc($vendor_set )) { ?>
        <tr>
          <td><?php echo h($index['vendor_id']); ?></td>
          <td><?php echo h($index['vendor_name']); ?></td>
    	    <td><?php echo h($index['vendor_name']); ?></td>
          <td><?php echo h($index['vendor_street']); ?></td>
          <td><?php echo h($index['vendor_city']); ?></td>
          <td><?php echo h($index['vendor_phone']); ?></td>
          <td><?php echo h($index['vend_create_date']); ?></td>
          <td><?php echo h($index['vend_update_date']); ?></td>
          <td><a class="action" href="<?php echo url_for('/admin/adivsor/show.php?id=' . h(u($index['vendor_id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/admin/adivsor/edit.php?id=' . h(u($index['vendor_id']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/admin/adivsor/delete.php?id=' . h(u($index['vendor_id']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
