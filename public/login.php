<?php
require_once('../private/initialize.php');
$page_title = 'User Login';
$refreshTime = 5;
include(SHARED_PATH . '/header.php');

?>
<div id="content">
  <div id="main">

<?php
if(isset($_POST["username"])){
    if(isset($_POST["password"])){

        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        
        global $db;
        $sql = "select username, password, admin from application_users where username='$username' and password='$password'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {

            $i = $result->fetch_assoc();
            echo "<b>Access is granted.</b><br/>";
            
            if($i["admin"] == 1){
                header('Refresh: '.$refreshTime.'; URL = admin\index.php');
            }else{
                header('Refresh: '.$refreshTime.'; URL = facility\index.php');
            }
        } else {
            echo "<h2>Access is denied.</h2>";
        }
    }
}
?>
        <h1>User Login</h1>
        <form action="login.php" method="post">
            Username: <input type="text" name="username"><br/>
            Password: <input type="password" name="password"><br/>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>

<?php
include(SHARED_PATH . '/footer.php');
?>