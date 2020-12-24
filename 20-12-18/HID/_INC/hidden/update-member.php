<?php
session_start();
if(!isset($_SESSION["login-{$root}"])){?>
    <script>
        location.href='<?=$root?>';
    </script><?php
    exit;
}
if($_SESSION['admin']!=true){
    ?><script>
        history.back();
    </script><?php
    exit;
}
$name=$_POST['name'];
$conn=conn();
$sql="select id,passwd from member where name='{$name}'";
$data=fetch(query($conn,$sql));
$id=$data['id'];
$passwd=$data['passwd'];

?>