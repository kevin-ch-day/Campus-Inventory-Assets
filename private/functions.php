<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit();
}

function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function query($sql){
  global $db;
  //echo "$sql<br/>";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}

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
