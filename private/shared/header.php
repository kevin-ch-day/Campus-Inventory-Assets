<?php
  if(!isset($page_title)) { $page_title = 'Staff Area'; }
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
      <h1>Campus Inventory Assets</h1>
    </header>
    <navigation>
      <ul>
        <li><a href="<?php echo url_for('index.php'); ?>">Home</a></li>
        <li><a href="<?php echo url_for('login.php'); ?>">Login</a></li>
        <li><a href="<?php echo url_for('about.php'); ?>">About</a></li>
        <li><a href="<?php echo url_for('contact.php'); ?>">Contact Us</a></li>
      </ul>
    </navigation>
