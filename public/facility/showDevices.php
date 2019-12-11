<?php
require_once('../../private/initialize.php');
$page_title = 'Staff Menu';
include(SHARED_PATH . '/facility_header.php');
?>

<div id="content">
	<div id="main-menu">
		<h3>Assign a student a device</h3>
		<table class="list">
	<tr>
		<th>Asset ID</th>
		<th>Brand</th>
		<th>Serial #</th>
		<th>&nbsp;</th>
	</tr>
	<?php
		$sql = "select asset_id, serialNumber, brand from asset where asset.asset_id not in (select deployment.asset_id from deployment)";
		$set = query($sql);
		while($i = mysqli_fetch_assoc($set)) {
	?>
	<tr>
		<td><?php echo h($i['asset_id']); ?></td>
		<td><?php echo h($i['brand']); ?></td>
		<td><?php echo h($i['serialNumber']); ?></td>
        <td><a class="action" href="<?php echo url_for('/facility/assignStudentDevice.php?id=' . h(u($i['asset_id']))); ?>">Select</a></td>
    </tr>
	<?php } ?>
</table>

	</div>
</div>

<?php
include(SHARED_PATH . '/facility_footer.php');
?>

