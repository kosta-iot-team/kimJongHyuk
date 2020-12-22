<?php include "ROOT.php";
include $_SERVER['DOCUMENT_ROOT']."{$ROOT}/_INC/FUNC.php";
include "CSS/cssSpiner.php";
?>
<html>
    <title>loading...</title>
    <div style="height:100%;display:flex;align-items:center;">
        <div style="margin:auto;">
            <div class="loader"></div>
        </div>
    </div>
</html>
<?php 

if(!isset($_POST['process'])){?>
    <script>
        history.back();
    </script><?php
    exit;
}
session_start();
if(!isset($_SESSION["login-{$ROOT}"])&&$_POST['process']!='login'&&$_POST['process']!='sign-up'){
    ?><script>
        location.href='<?=$ROOT?>';
    </script><?php
    exit;
}
if($_POST['process']=='login'){
    // die('id: ['.$_POST['id'].'], passwd: ['.$_POST['passwd'].']');
    $conn=mC();
    // id의 비밀번호가 일치하는지
    $input_id=mE($conn,$_POST['id']);
    $input_passwd=$_POST['passwd'];
    $sql="
        select passwd,name,admin from member where id='$input_id'
    ";
    $res=mQ($conn,$sql);
    $passwd=null;
    while($data=mF($res)){
        $passwd=$data['passwd'];
        $name=$data['name'];
        $admin=$data['admin'];
    }
    if($passwd!=null){
        if($input_passwd==$passwd){
            // 로그인 확인용 세션값
            $_SESSION["login-{$ROOT}"]=true;
            // 세션에 이름 집어넣기
            $_SESSION['name']=$name;
            // 세션 admin bool 등록
            if($admin==1){
                $_SESSION['admin']=true;
            }else{
                $_SESSION['admin']=false;
            }
            ?><script>
                alert("<?=$name?> 님 반갑습니다.");
                location.href='<?=$ROOT?>/home';
            </script><?php
            exit;
        }
    }
    ?><script>
        alert('없는 아이디입니다.');
        history.back();
    </script><?php
    exit;
}else if($_POST['process']=='logout'){
    session_destroy();?>
    <script>
        location.href='<?=$ROOT?>';
    </script><?php
    exit;
}else if($_POST['process']=='check'){
    $id=$_POST['id'];
    if($_POST['checked']==''){
        $state='on';
    }else{
        $state='off';
    }
    $conn=mC();
    $sql="update doorlock1_switch set state='$state' where id='$id'";
    mQ($conn,$sql);?>
    <script>
        location.href='<?=$ROOT?>/home';
    </script><?php
    exit;
}else if($_POST['process']=='delete'){
    $id=$_POST['id'];
    $conn=mC();
    // 1. 도어록1 count 가져오고 1 낮추기
    $sql="select count from count where name='doorlock1'";
    $count=mF(mQ($conn,$sql))['count'];
    $count--;
    $sql="update count set count='{$count}' where name='doorlock1'";
    mQ($conn,$sql);
    // 2. 삭제하기
    $sql="delete from doorlock1_switch where id='$id'";
    mQ($conn,$sql);
    // 3. id 재설정: 이름 모두 가져오기
    $sql="select name from doorlock1_switch";
    $result=mQ($conn,$sql);
    $set_id=1;
    while($data=mF($result)){
        // id 1부터 맞추기
        $sql="update doorlock1_switch set id='{$set_id}' where name='{$data['name']}'";
        mQ($conn,$sql);
        // id 1 올리기
        $set_id++;
    }
    ?><script>
        location.href='<?=$ROOT?>/home';
    </script><?php
    exit;
}else if($_POST['process']=='regist-apparatus'){
    $name=$_POST['name'];
    $conn=mC();
    // 1. 도어록1 count 가져오고 1 올리기
    $sql="select count from count where name='doorlock1'";
    $count=mF(mQ($conn,$sql))['count'];
    $count++;
    $sql="update count set count='{$count}' where name='doorlock1'";
    mQ($conn,$sql);
    // 2. 등록하기
    $sql="insert into doorlock1_switch value (
        $count, '$name', 'off'
    )";
    mQ($conn,$sql);
    ?><script>
        location.href='<?=$ROOT?>/home';
    </script><?php
    exit;
}else if($_POST['process']==='open'){
    $name=$_SESSION['name'];
    $conn=mC();
    // doorlock1_history admin 출입 기록
    $sql="
    insert into doorlock1_history value(
    now(),
    '{$name}'    
    )";
    mQ($conn,$sql);
    ?><script>
        location.href='<?=$ROOT?>';
    </script><?php
    exit;
}else if($_POST['process']==="delete-member"){
    $name=$_POST['name'];
    $conn=mC();
    // 그 이름의 회원 데이터 삭제
    $sql="
    delete from member where name='{$_POST['name']}'
    ";
    mQ($conn,$sql);
    // 회원 수 가져오기
    $sql="
    select count from count where name='member'
    ";
    $count=mF(mQ($conn,$sql))['count'];
    // 회원 수 줄이기
    $count--;
    $sql="
    update count set count=$count where name='member'
    ";
    mQ($conn,$sql);
    // no 재정렬하기
    $sql="select no from member";
    $res=mQ($conn,$sql);
    $no_new=1;
    while($data=mF($res)){
        $no_s=$data['no'];
        $sql="update member set no={$no_new} where no={$no_s}";
        mQ($conn,$sql);
        $no_new++;
    }
    ?><script>
        location.href='<?=$ROOT?>/home/member-control';
    </script><?php
    exit;
}else if($_POST['process']==="member-add"){
    $conn=mC();
    $name=mE($conn,$_POST['name']);
    // 이름이 겹치는지 확인
    $sql="
    select name from member
    ";
    $res=mQ($conn,$sql);
    while($data=mF($res)){
        $name_s=$data['name'];
        if($name===$name_s){
            ?><script>
                alert('이미 존재하는 이름입니다.');
                history.back();
            </script><?php
            exit;
        }
    }
    // 회원 수 가져오기
    $sql="
    select count from count where name='member'
    ";
    $count=mF(mQ($conn,$sql))['count'];
    // 회원 수 증가
    $count++;
    $sql="
    update count set count=$count where name='member'
    ";
    mQ($conn,$sql);
    // 이름 등록
    $sql="
    insert into member value(
        {$count},
        '{$name}',
        0,
        '',
        ''
    )
    ";
    mQ($conn,$sql);
    ?><script>
        location.href='<?=$ROOT?>/home/member-control';
    </script><?php
    exit;
}else if($_POST['process']==="member-update"){
    $conn=mC();
    $name=mE($conn,$_POST['name']);
    $name_new=mE($conn,$_POST['name_new']);
    $id=mE($conn,$_POST['id']);
    $passwd=mE($conn,$_POST['passwd']);
    // 바로 업데이트
    $sql="
        update member set name='{$name_new}', id='{$id}', passwd='{$passwd}' where name='{$name}'
    ";
    mQ($conn,$sql);
    ?><script>
        location.href='<?=$ROOT?>/home/member-control';
    </script><?php
    exit;
}else if($_POST['process']==="infor-update"){
    $conn=mC();
    $name=mE($conn,$_POST['name']);
    $name_new=mE($conn,$_POST['name_new']);
    $id=mE($conn,$_POST['id']);
    $passwd=mE($conn,$_POST['passwd']);
    // 바로 업데이트
    $sql="
        update member set name='{$name_new}', id='{$id}', passwd='{$passwd}' where name='{$name}'
    ";
    mQ($conn,$sql);
    $_SESSION['name']=$name_new;
    ?><script>
        location.href='<?=$ROOT?>/home';
    </script><?php
    exit;
}else if($_POST['process']==="sign-up"){
    $conn=mC();
    $name=mE($conn,$_POST['name']);
    $id=mE($conn,$_POST['id']);
    $passwd=mE($conn,$_POST['passwd']);
    // 관리자가 있는지
    $sql="select name from member where admin=1";
    $name_admin=null;
    $res=mQ($conn,$sql);
    while($data=mF($res))$name_admin=0;
    if($name_admin===null){
        // 맴버수 가져오기
        $sql="select count from count where name='member'";
        $count=mF(mQ($conn,$sql))['count'];
        // 맴버수 1증가
        $count++;
        $sql="update count set count={$count} where name='member'";
        mQ($conn,$sql);
        // 관리자로 가입시키기
        $sql="insert into member value(
            {$count},
            '{$name}',
            0,
            '{$id}',
            '{$passwd}'
        )";
        mQ($conn,$sql);
        ?><script>
            alert("관리자로 가입되었습니다.");
            location.href='<?=$ROOT?>';
        </script><?php
        exit;
    }
    // 아이디가 존재하는지
    $sql="
        select id from member where name='{$name}'
    ";
    $exits=null;
    $res=mQ($conn,$sql);
    while($data=mF($res)){
        $exist=$data['id'];
    }
    if($exist===null){
        ?><script>
            alert("등록되지 않은 이름입니다. 관리자에게 문의하세요.");
            history.back();
        </script><?php
        exit;
    }
    if($exist!==''){
        ?><script>
            alert("이미 가입하셨습니다.");
            location.href='<?=$ROOT?>';
        </script><?php
        exit;
    }
    // member 테이블에 정보 업데이트 시키기 where name
    $sql="update member set id='{$id}', passwd='{$passwd}' where name='{$name}'";
    mQ($conn,$sql);
    ?><script>
        alert("가입완료 되었습니다. 로그인하세요.");
        location.href='<?=$ROOT?>';
    </script><?php
    exit;
}
?>