<?php
require_once('database.php');  
$db = db_connect();

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
  if(!$result){
		die("Query Failed: ".$db->error);
  }
  
  confirm_result_set($result);
  return $result;
}

function checkStudentID($studentID){
  $sql = "select student_id from student";
  $set = query($sql);

  while($i = mysqli_fetch_assoc($set)){
    if($i['student_id'] == $studentID){
      return true;
    }
  }
  return false;
}

?>
