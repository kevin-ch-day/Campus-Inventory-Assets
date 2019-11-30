<?php
require_once('../../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/admin_header.php');

?>

<div id="content">
  <div id="main-menu">
    <h2>Users</h2>
    <div class="actions">
      <a class="action" href="<?php echo url_for('/admin/users/new.php'); ?>">Add a new user</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Admin</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php
        $sql = "select * from application_users";
        $user_set = query($sql);
          while($users = mysqli_fetch_assoc($user_set)) {
      ?>
        <tr>
          <td><?php echo h($users['username']); ?></td>
          <td><?php echo h($users['password']); ?></td>
    	    <td><?php echo h($users['admin']); ?></td>
          <td><a class="action" href="<?php echo url_for('/admin/users/edit.php?id=' . h(u($users['userid']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/admin/users/delete.php?id=' . h(u($users['userid']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
  </div>
</div>

<?php
include(SHARED_PATH . '/admin_footer.php');
?>

