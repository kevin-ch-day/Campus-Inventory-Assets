<?php
require_once('../../../private/initialize.php');
$page_title = 'Delete User';
include(SHARED_PATH . '/admin_header.php');

if(is_post_request()){
    $sql = "delete from application_users ";
    $sql .="where userid = ".$_POST['userid'];
    $result = query($sql);
?>
<div id="content">
    <div id="main-menu">
        <!-- display message if user has been deleted or not -->
    <div>
<div>

<?php
}else{
?>
    <div id="content">
        <div id="main-menu">
        <h1>Delete User</h1>
<?php
$sql = "select * from application_users where userid='$_GET[id]'";
$result = query($sql);
$user = mysqli_fetch_assoc($result);

echo "ID: ".$user['userid']."<br/>";
echo "Username: ".$user['username']."<br/>";
echo "Password: ".$user['password']."<br/>";
echo "Admin: ".$user['admin']."<br/>";
?>
        <form action="delete.php" method="post">
            <!-- TODO add hidden value for userid -->
            <input type="submit" name="submit" value="Delete User">
        </form>
    </div>
</div>

<?php
}
include(SHARED_PATH . '/admin_footer.php');
?>

