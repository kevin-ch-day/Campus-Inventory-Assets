<?php
  if(!isset($page_title)) { $page_title = 'Administrator Area'; }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>GBI - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
  </head>

  <body>
    <header>
      <h1>Campus Inventory Assets - Administrator Area</h1>
    </header>

    <navigation>
      <ul>
        <li><a href="<?php echo url_for('/admin/index.php'); ?>">Menu</a></li>
        <li><a href="<?php echo url_for('/index.php'); ?>">Logout</a></li>
      </ul>
    </navigation>
