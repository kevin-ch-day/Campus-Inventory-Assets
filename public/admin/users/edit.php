<?php
require_once('../../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/admin_header.php');

if(!isset($_GET["id"])){
?>
    <div id="content">
        <div id="main-menu">
            <p>No user selected</p>
        </div>
    </div>  

<?php
}else{
    $userid = trim($_GET["id"]);
?>

<div id="content">
  <div id="main-menu">
    <h1>Edit User Information</h1>
<?php
    $sql = "select * from application_users where userid=$userid";
    $set = query($sql);
    $users = mysqli_fetch_assoc($set);
    
    echo"<table>";
    echo "<tr><td>Username:</td><td>&nbsp;</td><td>".$users['username']."</td></tr>";
    echo "<tr><td>Password:</td><td>&nbsp;</td><td>".$users['passwd']."</td></tr>";
    echo "<tr><td>Admin access:</td><td>&nbsp;</td><td>".$users['admin']."</td></tr>";
    echo "</table>";
?>
  </div>
</div>

<?php
}
include(SHARED_PATH . '/admin_footer.php');
?>

