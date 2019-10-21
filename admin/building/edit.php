<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/admin/pages/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {

  // Handle form values sent by new.php

  $page = [];
  $page['building_id'] = $_POST['building_id'] ?? '';
  $page['building_name'] = $_POST['building_name'] ?? '';
  $page['building_city'] = $_POST['building_city'] ?? '';
  $page['build_create_date'] = $_POST['build_create_date'] ?? '';
  $page['build_update_date'] = $_POST['build_update_date'] ?? '';

  $result = update_page($page);
  redirect_to(url_for('/admin/pages/show.php?id=' . $id));

} else {

  $building =  find_building_by_id($id);

  $building_set = find_all_buildings();
  $building_count = mysqli_num_rows($building_set);
  mysqli_free_result($building_set);

}
?>

<?php $page_title = 'Edit Page'; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>

<div id="content">

</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
