<?php 
include 'func.php';
include '../root.php';
?>
<!doctype html>
<html>
<head>
    <META CHERSET='UTF-8'>
    <link rel="stylesheet" href="css/spinnerstyle.css">
    <!--<script defer src="./JS/CHIP.js"></script>-->
    <title>Spinner</title>
</head>
<body>
        <div class="loader"></div>
</body>
</html>
<?php
if(!isset($_POST['process'])){?>
    <script>
        history.back();
    </script><?php
    exit;
}

if($_POST['process']==='login'){
    if($_POST['id']==='1'&&$_POST['passwd']==='1'){
        session_start();
        $_SESSION['login-hid-team']=true;
        $_SESSION['name-hid-team']='admin';
    }
    ?><script>
        location.href='/<?=$root?>';
    </script><?php
    exit;
}else if($_POST['process']==='logout'){
    session_start();
    $_SESSION['login-hid-team']=false;
    ?><script>
        location.href='/<?=$root?>';
    </script><?php
    exit;
}else if($_POST['process']=='checkbox'){
    $conn=conn();
    $sql="update doorlock1_switch set state='{$_POST['state_be']}' where id='{$_POST['id']}'";
    query($conn,$sql);?>
    <script>
        location.href='/<?=$root?>';
    </script><?php
    exit;
}else if($_POST['process']=='regist-doorlock'){
    session_start();
    if(!isset($_SESSION['doorlock-registed'])||$_SESSION['doorlock-registed']==false){
        $_SESSION['doorlock-registed']=true;
        ?><script>
            location.href='/<?=$root?>';
        </script><?php    
        exit;
    }else{
        $_SESSION['doorlock-registed']=false;
        ?><script>
            location.href='/<?=$root?>';
        </script><?php    
        exit;
    }
}else if($_POST['process']=='delete-switch'){
    $conn=conn();
    // 스위치 갯수 가져오기
    $sql="select count from count where name='doorlock1'";
    $count=fetch(query($conn,$sql))['count'];
    // 스위치 수 줄이기
    $count--;
    $sql="update count set count={$count} where name='doorlock1'";
    query($conn,$sql);
    // 스위치 삭제
    $sql="delete from doorlock1_switch where id='{$_POST['id']}'";
    query($conn,$sql);
    // 스위치 id 리셋
    $sql="select id from doorlock1_switch";
    $res=query($conn,$sql);
    $new_id=1;
    while($data=fetch($res)){
        $data_id=$data['id'];
        $sql="update doorlock1_switch set id={$new_id} where id={$data_id}";
        query($conn,$sql);
        $new_id++;
    }?>
    <script>
        location.href='/<?=$root?>';
    </script><?php
    exit;
}else if($_POST['process']==='open'){
    $conn=conn();
    // doorlock1_history admin 출입 기록
    $sql="
    insert into doorlock1_history value(
    now(),
    'admin'    
    )";
    query($conn,$sql);
    ?><script>
        location.href='/<?=$root?>';
    </script><?php
    exit;
}else if($_POST['process']==='regist'){
    $name=$_POST['name'];
    $conn=conn();
    // 개수 가져오기
    $sql="
    select count from count where name='doorlock1'
    ";
    $count=fetch(query($conn,$sql))['count'];
    // 개수 하나 증가시키기 = 등록될 아이디
    $count++;
    $sql="
    update count set count={$count} where name='doorlock1'
    ";
    query($conn,$sql);
    // 스위치 등록
    $sql="
    insert into doorlock1_switch value(
    {$count},
    '{$name}',
    'off'    
    )";
    query($conn,$sql);
    ?><script>
        location.href='/<?=$root?>';
    </script><?php
    exit;
}
?>