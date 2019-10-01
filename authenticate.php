<?php
require_once('includes\header.inc');

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

    // check if errors happened
    if(empty($username_err) && empty($password_err)){
        // select username and password from database
        $sql = "select username, password from users";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {

                if(strcmp($row["username"], $_POST["username"])){
                    
                    //if(strcmp($row["password"], $_POST["password"])){
                    if($row["password"] == $_POST["password"]){
                        $msg = "access granted";
                    }
                }else{
                    $msg = "access denied";
                }
            }
        }else{
            // user table is empty
        }
    }else{
        // errors happened
    }
}
?>

<div id="main">
    <p><?php echo $msg; ?></p>
</div>

<?php
require_once('includes\footer.inc');
?>
