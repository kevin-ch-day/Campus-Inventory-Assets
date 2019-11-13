<?php
require_once('../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/header.php');
?>

<div id="content">
  <div id="main-menu">
  <form action="<?php echo url_for('/admin/facility/index.php'); ?>" method="post">
      <select name="issues">
        <option value="volvo">Broken Screen</option>
        <option value="saab">Keyboard Issue</option>
        <option value="fiat">Fiat</option>
        <option value="audi">Other</option>
      </select> 
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

<?php
include(SHARED_PATH . '/footer.php');
?>