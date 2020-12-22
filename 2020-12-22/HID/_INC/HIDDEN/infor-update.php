<?php
session_start();
if(!isset($_SESSION["login-{$ROOT}"])){?>
    <script>
        location.href='<?=$ROOT?>';
    </script><?php
    exit;
}
$name=$_SESSION['name'];
$conn=mC();
$sql="select * from member where name='{$name}'";
$data=mF(mQ($conn,$sql));
$id=$data['id'];
$passwd=$data['passwd'];
?>