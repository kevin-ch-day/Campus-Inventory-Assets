<?php
require_once('../../../private/initialize.php');


if(is_post_request()) {
  $sql = "select * from application_users";
  $set = query($sql);
  $lastId;
  while($i = mysqli_fetch_assoc($set)){
    $lastId = $i['userid'];
  }

  $username = $_POST["username"];
  $password = $_POST["password"];
  $admin = $_POST["admin"];

  $sql = "INSERT INTO application_users (userid, username, passwd, admin) ";
  $sql .= "VALUES ($lastId+1, '$username', '$password', '$admin')";
  query($sql);
?>
  <div id="content">
    <div id="main-menu">
      <div id="content">
        <p>New User Created</p>
      <div>
    </div>
  </div>

<?php
} else {


$page_title = 'Create a user';
include(SHARED_PATH . '/admin_header.php');
?>

<div id="content">
  <a class="back-link" href="<?php echo url_for('/admin/users/index.php'); ?>">&laquo; Back to List</a>
  <div class="page new">
    <h1>Create a User</h1>
    <form action="<?php echo url_for('/admin/users/new.php'); ?>" method="post">
      Username: <input type ="text" name="username"><br>
      Password: <input type ="text" name="password"><br>
      Admin: <input type="checkbox" name="admin" value="Yes" /><br>
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

<?php
}
include(SHARED_PATH . '/admin_footer.php');
?>
