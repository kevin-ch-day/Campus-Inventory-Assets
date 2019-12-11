<script>
function returnHome(){

}
</script>
<?php
require_once('../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/facility_header.php');

if(is_post_request()) {
	$sql = "select * from repair";
	$set = query($sql);
	$lastId = 0;
	while($i = mysqli_fetch_assoc($set)){
	  if($i['repair_id'] == null){
			$lastId = 0;
	  		break;
	  	}
		$lastId = $i['repair_id'] + 1;
	}

	$deviceId = $_POST["deviceId"];
	$studentId = $_POST["studentId"];
	$description = $_POST["description"];
	$date = date("Y-m-d");
  
	$sql = "INSERT INTO repair (repair_id, asset_id, student_id, repair_description, repair_start_date) ";
	$sql .= "VALUES ('$lastId', '$deviceId', '$studentId', '$description', '$date')";
	query($sql);
?>
	<div id="content">
  		<div id="main-menu">
			<h1>Repair Ticket Submitted</h1>
<?php
	echo "Repair ID: ".$lastId."<br/>";
	echo "Asset ID: ".$deviceId."<br/>";
	echo "Student ID: ".$studentId."<br/>";
	echo "Description: ".$description."<br/>";
	echo "Date submitted: ".$date."<br/>";
?>
			 <button onclick="location.href = 'index.php';">Return Home</button> 
		</div>
	</div>
<?php
} else {
	// to do

?>

<div id="content">
  <div id="main-menu">
    <h2>Create a Ticket</h2>
	<form action="<?php echo url_for('/facility/createTicket.php'); ?>" method="post">
		Device ID: <input type="text" name="deviceId"><br/>
		Student ID: <input type="text" name="studentId"><br/>
		<textarea id="description" name="description" placeholder="Problem Description" style="height:170px"></textarea><br/>
		<input type="submit" value="Submit">
    </form>
</div>

<?php
}
include(SHARED_PATH . '/facility_footer.php');
?>

