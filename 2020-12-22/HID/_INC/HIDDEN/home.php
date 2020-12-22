<?php
session_start();
if(!isset($_SESSION["login-{$ROOT}"])){?>
    <script>
        location.href='<?=$ROOT?>';
    </script><?php
    exit;
}

$conn=mC();
// 1. 도어록 스위치 정렬하기
$sql="select * from doorlock1_switch";
$result=mQ($conn,$sql);
$switchs="";
while($data=mF($result)){
    $id=$data['id'];
    $name=$data['name'];
    if($data['state']=='on'){
        $checked='checked';
    }else{
        $checked='';
    }
    $switchs.="
    <form action='{$ROOT}/_inc/process.php' id='check{$id}' method='post'>
        <input type='hidden' name='process' value='check'>
        <input type='hidden' name='id' value='{$id}'>
        <input type='hidden' name='checked' value='{$checked}'>
    </form>
    <form action='{$ROOT}/_inc/process.php' id='delete{$id}' method='post'>
        <input type='hidden' name='process' value='delete'>
        <input type='hidden' name='id' value='{$id}'>
    </form>
    <div class='flex'>
        <div class='center' style='width:40%;margin:0;margin-left:20px;'>
            <span class='text-right'>{$name}</span>
        </div>
        <div style='margin-left:20px;'>
            <label class=\"switch\" style='margin-bottom:0px;'>
                <input type=\"checkbox\" onclick='check{$id}.submit()' {$checked}/>
                <span class=\"slider\"></span>
            </label>
        </div>
        <div style='margin-left:20px;margin-top:5px;'>
            <button onclick=\"
            if(confirm('삭제하시겠습니까?')){
                delete{$id}.submit();
            }else{
                return false;
            }\"
            class=\"minus-button minus-button--large\">--</button>
            <i class=\"far fa-minus-square fa-lgx\" aria-hidden=\"true\"></i>
        </div>
    </div>
    ";
}

if(!isset($_POST['times_ago'])){
    $sql2="";
}else{
    $ago=$_POST['times_ago'];
    if($ago==='3hours'){
        $sql2=" where time <= date_add(now(),interval -3 hour)";
    }else if($ago==='1day'){
        $sql2=" where time <= date_add(now(),interval -1 day)";
    }else if($ago==='1week'){
        $sql2=" where time <= date_add(now(),interval -7 day)";
    }
}
$sql="select * from doorlock1_history".$sql2;
$res=mQ($conn,$sql);
$trs='';
$date='';
while($data=mF($res)){
    $name=$data['name'];
    $time1=substr($data['time'],0,10);
    $time2=substr($data['time'],11,8);
    if($data===''){
        $date=$time1;
    }else if($date!==$time1){
        $trs="
            <tr>
            <td style='height:30px;width:55%;'>{$date}</td><td></td>
            </tr>
        ".$trs;
        $date=$time1;
    }
    $trs="
    <tr>
    <td style='width:55%;text-align:center;'>{$name}</td><td>{$time2}</td>
    </tr>
    ".$trs;
}
$trs="
    <tr>
    <td style='height:30px;width:55%;'>{$date}</td>
    </tr>
".$trs;

$span_admin="";
$sql="select admin from member where name='{$_SESSION['name']}'";
$res=mQ($conn,$sql);
while($data=mF($res)){
    $admin=$data['admin'];
}
if($admin==1){
    $span_admin="
    <span class='span' onclick='location.href=\"member-control\"'>회원관리</span>
    ";
}
?>
<!------------------------------- 폼영역 ------------------------------->
<!-- 오픈 -->
<form id='openform' action="<?=$ROOT?>/_inc/process.php" method='post'>
    <input type="hidden" name='process' value='open'>
</form>
<!-- 시간 -->
<form action="." method='post' id='t_3hours'>
    <input type="hidden" name='times_ago' value='3hours'>
</form>
<form action="." method='post' id='t_1day'>
    <input type="hidden" name='times_ago' value='1day'>
</form>
<form action="." method='post' id='t_1week'>
    <input type="hidden" name='times_ago' value='1week'>
</form>
<!-- 로그아웃 -->
<form name='logout' action="<?=$ROOT?>/_inc/process.php" method='post'>
    <input type="hidden" name='process' value='logout'>
</form>
<!---------------------------------------------------------------------->