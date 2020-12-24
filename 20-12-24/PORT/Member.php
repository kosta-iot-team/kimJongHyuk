<?php include "__INC/CSS/CSS.php"?>

<title>Member</title>

<?php include "_PAGE/nav.php"?>
<?php include "_PAGE/top.php"?>

<div id='intro'>
    <?php
    if(!isset($_POST['who'])){
        
    }else{
        include "WHO/{$_POST['who']}.php";
    }
    ?>
</div>
