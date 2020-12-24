<?php
include '../root.php'; 
/* <?=$root?> */
/* {$root} */
?>
<form action="/<?=$root?>/_inc/process.php" method='post'
onsubmit="
    if(name.value.trim(' ')==''){
        name.value='';
        name.focus();
        return false;
    }
">
    <input type="hidden" name='process' value='regist'>
    기구 이름: <input type="text" name='name'>
    <input type="submit">
</form>