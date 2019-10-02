<?php
function authentication($user, $pass){
	global $conn;
    mysqli_select_db($conn, "users");

    if(empty($username_err) && empty($password_err)){
        $sql = "select username, password from users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if(strcmp($row["username"], $_POST["username"])){
                    if($row["password"] == $_POST["password"]){
                        return true;
                    }
                }
            }
            return false;
		}
	}
}

?>