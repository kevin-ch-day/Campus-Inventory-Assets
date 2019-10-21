<?php
require_once('../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/header.php');
?>

<div id="content">
  <div id="main">
    <h1>User Login</h1>
        <form action="authenticate.php" method="post">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>

<?php
include(SHARED_PATH . '/footer.php');
?>