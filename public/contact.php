<?php
require_once('../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/header.php');

if(is_post_request()) {
    // to do
} else {
	// to do
}
?>

<div id="content">
    <div id="main">
        <h1>Contact us</h1>
        <form action="<?php echo url_for('/contact.php'); ?>" method="post">
	        <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.."><br/>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br/>
            <label for="building">Building</label>
                <select id="building" name="building">
<?php
$sql = "select * from building";
$set= query($sql);
while($i = mysqli_fetch_assoc($set)) {
    h($i['building_id']);
    echo "<option value=".$i['building_id'].">".$i['building_id']."</option>";
}
?>
                </select><br/>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea><br/>
    <input type="submit" value="Submit">
</form>
    </div>
</div>

<?php
include(SHARED_PATH . '/footer.php');
?>