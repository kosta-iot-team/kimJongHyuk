<?php
session_start();
if(!isset($_SESSION["login-{$root}"])){?>
    <script>
        location.href='<?=$root?>';
    </script><?php
    exit;
}
$name=$_SESSION['name'];
$conn=conn();
$sql="select * from member where name='{$name}'";
$data=fetch(query($conn,$sql));
$id=$data['id'];
$passwd=$data['passwd'];
?>