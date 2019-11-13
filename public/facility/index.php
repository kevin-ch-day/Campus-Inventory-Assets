<?php
require_once('../../private/initialize.php');
$page_title = 'Administrator Menu';
include(SHARED_PATH . '/header.php');
?>

<div id="content">
  <div id="main-menu">
  <form action="<?php echo url_for('/admin/facility/index.php'); ?>" method="post">
      <select name="issues">
        <option value="screen">Broken Screen</option>
        <option value="keyboard">Keyboard Issue</option>
        <option value="network">No Internet Connection</option>
        <option value="power">Will not turn on</option>
        <option value="other">Other</option>
      </select> 
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

<?php
include(SHARED_PATH . '/footer.php');
?>