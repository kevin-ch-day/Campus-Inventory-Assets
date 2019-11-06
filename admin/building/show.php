<?php
require_once('../../../private/initialize.php');

$page_title = 'Show Bulding';
$id = $_GET['id'] ?? '1'; // PHP > 7.0
include(SHARED_PATH . '/admin_header.php');
$building = find_building_by_id($id);
?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/admin/building/index.php'); ?>">&laquo; Back to List</a>

  <div class="page show">
    <h1>Building Information</h1>
    <div class="attributes">
      <?php echo h($building['building_name']); ?><br/>
      <?php echo h($building['building_city']); ?><br/>
      <?php echo h($building['build_create_date']); ?><br/>
      <?php echo h($building['build_update_date']); ?><br/>
    </div>
  </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
