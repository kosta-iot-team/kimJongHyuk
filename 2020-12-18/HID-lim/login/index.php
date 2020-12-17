<?php
include '../root.php'; 
/* <?=$root?> */
/* {$root} */
?>
<form action="/<?=$root?>/_inc/process.php" method='post'>
    <input type="hidden" name='process' value='login'>
    id: <input type="text" name='id'><br>
    passwd: <input type="password" name='passwd'>
    <input type="submit">
</form>
<hr>
- admin <br> id: 1, passwd: 1