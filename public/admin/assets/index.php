<?php
require_once('../../../private/initialize.php');
$page_title = 'List Assets';
include(SHARED_PATH . '/admin_header.php');

$sql ="select * from asset";
$set = query($sql);
?>

<div id="content">
    <div class="main-main">
    <table class="list">
  	  <tr>
        <th>Asset ID</th>
        <th>Serial</th>
        <th>Brand</th>
        <th>Model</th>
  	    <th>Purchase</th>
        <th>End of life</th>
        <th>Date Created</th>
        <th>Last Updated</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>
        <?php while($index = mysqli_fetch_assoc($set)) { ?>
        <tr>
            <td><?php echo h($index['asset_id']); ?></td>
            <td><?php echo h($index['serialNumber']); ?></td>
    	      <td><?php echo h($index['brand']); ?></td>
            <td><?php echo h($index['model']); ?></td>
            <td><?php echo h($index['purchase_num']); ?></td>
            <td><?php echo h($index['EOL_date']); ?></td>
            <td><?php echo h($index['asset_create_date']); ?></td>
            <td>
            <?php
            if($index['asset_update_date'] == null){
              echo "";
            }else{
              echo $index['asset_update_date'];
            }
            ?></td>
            <td><a class="action" href="<?php echo url_for('/admin/assets/edit.php?id=' . h(u($index['asset_id']))); ?>">Edit</a></td>
            <td><a class="action" href="<?php echo url_for('/admin/assets/delete.php?id=' . h(u($index['asset_id']))); ?>">Delete</a></td>
    	</tr>
      <?php } ?>
  	</table>
    </div>
</div>

<?php
include(SHARED_PATH . '/admin_footer.php');
?>
