<?php
require_once('../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/header.php');

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
    
    $username = trim($_POST["username"]);
    $passwd = trim($_POST["password"]);

    if(authentication($username, $passwd)){
        echo "<h1>Access Granted!!</h1>";
        header('Refresh: '.$refreshTime.'; URL = admin\index.php');
    }else{
        echo "<h1>Bad username and password</h1>";
        header('Refresh: '.$refreshTime.'; URL = login.php');
    }
}

include(SHARED_PATH . '/footer.php');
?>

