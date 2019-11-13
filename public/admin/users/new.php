<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {

  $username = $_POST["username"];
  $passwd = $_POST["password"];
  $admin = $_POST["admin"];

  $sql = "INSERT INTO users (username, password, admin) ";
  $sql .= "VALUES ('$username', '$passwd', '$admin');";
  query($sql);

} else {
  // to do
}

$page_title = 'Create a Building';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/admin/users/index.php'); ?>">&laquo; Back to List</a>

  <div class="page new">
    <h1>Create Building</h1>
    <form action="<?php echo url_for('/admin/users/new.php'); ?>" method="post">
      Username: <input type ="text" name="username"><br>
      Password: <input type ="text" name="password"><br>
      Admin (1=yes, 0=no): <input type ="text" name="admin"><br>
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
