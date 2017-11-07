<?php

require_once ('../../../private/initialize.php');

$id = $_GET['id'] ?? '1';



$page_title = 'Show Subject';

include(SHARED_PATH . '/staff_header.php');

?>

<?php

$page_title = 'Show'; ?>

<HTML>
  <BODY>
    <a href = "index.php"><< Back to List</a>
    <BR><BR>

<?php

echo "Page id: " . h($id);

?>

<div id='content'>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>


</BODY>
</HTML>
