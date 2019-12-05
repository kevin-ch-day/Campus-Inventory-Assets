<?php
require_once('../../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/admin_header.php');

if(is_post_request()) {
	$sql = "select * from repair";
	$set = query($sql);
	$lastId = 0;
	while($i = mysqli_fetch_assoc($set)){
	  if($i['repair_id'] == null){
			$lastId = 0;
	  		break;
	  	}
		$lastId = $i['repair_id'];
	}
	
	$lastId++;
	$deviceId = $_POST["student_id"];
	$studentId = $_POST["asset_id"];
	$issues = $_POST["repair_description"];
	$startDate = date("Y-m-d");
	$endDate = null;
  
	$sql = "INSERT INTO repair (repair_id, asset_id, student_id, repair_description, repair_start_date, repair_complete_date) ";
	$sql .= "VALUES ('$lastId', '$deviceId', '$studentId', '$issues', '$startDate', '$endDate')";
	query($sql);
  } else {
	// to do
  }

?>

<div id="content">
  <div id="main-menu">
    <h2>Create a Ticket</h2>
	<form action="<?php echo url_for('/admin/tickets/new.php'); ?>" method="post">
		Device ID: <input type="text" name="asset_id"><br/>
		Student ID: <input type="text" name="student_id"><br/>
		Issue: <select name="repair_description">
			<option value="screen">Broken Screen</option>
			<option value="keyboard">Keyboard Issue</option>
			<option value="network">No Internet Connection</option>
			<option value="power">Will not turn on</option>
			<option value="other">Other</option>
		</select><br/>
		<input type="submit" value="Submit">
    </form>
</div>

<?php
include(SHARED_PATH . '/admin_footer.php');
?>

