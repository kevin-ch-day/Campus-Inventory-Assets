<?php
require_once('includes\header.inc');
$refreshTime = 1;

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
$msg = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

     // Check if username is empty
     if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
}
if(!$_POST["username"] && !$_POST["password"]){
?>
    <div id="main">
        <p>Error: No username or password</p>
        </div>
    </div>
<?php
}else{
    if(authentication($_POST["username"], $_POST["password"])){
        echo "<h1>Access Granted!!</h1>";
        header('Refresh: '.$refreshTime.'; URL = private\admin.php');
    }else{
        echo "<h1>Bad username and password</h1>";
        header('Refresh: '.$refreshTime.'; URL = login.php');
    }
}
require_once('includes\footer.inc');
?>