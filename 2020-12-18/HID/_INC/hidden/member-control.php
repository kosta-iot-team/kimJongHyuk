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

$conn=conn();
$sql="
    select * from member where name != '{$_SESSION['name']}'
";
$res=query($conn,$sql);
$trs='';
while($data=fetch($res)){
    $name=htmlchars($data['name']);
    $id=htmlchars($data['id']);
    $passwd=htmlchars($data['passwd']);
    $update="
        <form method='post' action='update-member/index.php' id='update_{$name}'>
            <input type='hidden' name='name' value='{$name}'>
        </form>
        <span class='span' onclick='update_{$name}.submit()'>
            하기
        </span>
    ";
    $delete="
        <form method='post' action='/{$root}/_inc/process.php' id='delete_{$name}'>
            <input type='hidden' name='process' value='delete-member'>
            <input type='hidden' name='name' value='{$name}'>
        </form>
        <span class='span-red' onclick='if(confirm(\"삭제하시겠습니까?\"))delete_{$name}.submit()'>
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