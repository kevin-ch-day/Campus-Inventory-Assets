<?php
require_once('includes\header.inc');
?>

<div id="main">
    <h1>User Login</h1>
    <form action="authenticate.php" method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>
</div>

<?php
require_once('includes\footer.inc');
?>
