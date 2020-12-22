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

$conn=mC();
$sql="
    select * from member where name != '{$_SESSION['name']}'
";
$res=mQ($conn,$sql);
$trs='';
while($data=mF($res)){
    $name=hS($data['name']);
    $id=hS($data['id']);
    $passwd=hS($data['passwd']);
    $update="
        <form method='post' action='update-member/index.php' id='update_{$name}'>
            <input type='hidden' name='name' value='{$name}'>
        </form>
        <span class='span' style='font-size:15px;' onclick='update_{$name}.submit()'>
            하기
        </span>
    ";
    $delete="
        <form method='post' action='{$ROOT}/_inc/process.php' id='delete_{$name}'>
            <input type='hidden' name='process' value='delete-member'>
            <input type='hidden' name='name' value='{$name}'>
        </form>
        <span class='span-red' style='font-size:15px;' onclick='if(confirm(\"삭제하시겠습니까?\"))delete_{$name}.submit()'>
            하기
        </span>
    ";
    $trs.="
        <tr style='height:30px;'>
            <td>{$name}</td>
            <td>{$id}</td>
            <td>{$passwd}</td>
            <td>{$update}</td>
            <td>{$delete}</td>
        </tr>
    ";
}
?>