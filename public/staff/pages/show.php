<?php

require_once ('../../../private/initialize.php');

$id = $_GET['id'] ?? '1';

$page = find_page_by_id($id);


?>

<?php $subject = find_subject_by_id($page['fk_subject_id']); ?>

<?php
$page_title = 'Show Page';
include(SHARED_PATH . '/staff_header.php');
require_once ('../../../private/initialize.php');
$id = $_GET['id'] ?? '1';
?>

<div id='content'>


<a href = "index.php"><< Back to List</a>
<BR><BR>

  <h1>Page: <?php echo h($page['menu_name']); ?></h1>

  <div class="attributes">
    <dl>
      <dt>Subject Name</dt>
      <dd><?php echo h($subject['menu_name']); ?></dd>
    </dl>
    <dl>
      <dt>Menu Name</dt>
      <dd><?php echo h($page['menu_name']); ?></dd>
    </dl>
    <dl>
      <dt>Position</dt>
      <dd><?php echo h($page['position']); ?></dd>
    </dl>
    <dl>
      <dt>Visible</dt>
      <dd><?php echo $page['visible'] == '1' ? 'true' : 'false'; ?></dd>
    </dl>
    <dl>
      <dt>Content</dt>
      <dd><?php echo h($page['content']); ?></dd>
    </dl>
  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
