<?php
require_once('../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/facility_header.php');

if(is_post_request()) {
	$sql = "select * from tickets";
	$set = query($sql);
	$lastId = 0;
	while($i = mysqli_fetch_assoc($set)){
	  if($i['ticketID'] == null){
			$lastId = 0;
	  		break;
	  	}
		$lastId = $i['ticketID'];
	}

	$deviceId = $_POST["deviceId"];
	$studentId = $_POST["studentId"];
	$issues = $_POST["issues"];
	$description = $_POST["description"];
	$date = date("Y-m-d");
  
	$sql = "INSERT INTO tickets (ticketID, deviceID, studentID, issue, description, dateCreated) ";
	$sql .= "VALUES ('$lastId', '$deviceId', '$studentId', '$issues', '$description', '$date')";
	query($sql);
  } else {
	// to do
  }

?>

<div id="content">
  <div id="main-menu">
    <h2>Create a Ticket</h2>
	<form action="<?php echo url_for('/facility/createTicket.php'); ?>" method="post">
		Device ID: <input type="text" name="deviceId"><br/>
		Student ID: <input type="text" name="studentId"><br/>
		Issue: <select name="issues">
			<option value="screen">Broken Screen</option>
			<option value="keyboard">Keyboard Issue</option>
			<option value="network">No Internet Connection</option>
			<option value="power">Will not turn on</option>
			<option value="other">Other</option>
		</select><br/>
		<textarea id="description" name="description" placeholder="Problem Description" style="height:170px"></textarea><br/>
		<input type="submit" value="Submit">
    </form>
</div>

<?php
include(SHARED_PATH . '/facility_footer.php');
?>

