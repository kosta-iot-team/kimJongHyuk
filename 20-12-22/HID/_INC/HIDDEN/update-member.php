<?php
session_start();
if(!isset($_SESSION["login-{$ROOT}"])){?>
    <script>
        location.href='<?=$ROOT?>';
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
$conn=mC();
$sql="select id,passwd from member where name='{$name}'";
$data=mF(mQ($conn,$sql));
$id=$data['id'];
$passwd=$data['passwd'];

?>