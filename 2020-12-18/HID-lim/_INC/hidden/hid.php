<?php 
session_start();
if(!isset($_SESSION['login-hid-team'])||$_SESSION['login-hid-team']===false){
    ?><script>
        location.href="login";
    </script><?php
    exit;
}

$divs="";
$conn=conn();
$sql="select * from doorlock1_switch";
$result=query($conn,$sql);
while($data=fetch($result)){
    if($data['state']=='on'){
        $checked=' checked';
        $state_be='off';
    }else{
        $checked='';
        $state_be='on';
    }
    $id=$data['id'];
    $divs.="
    <div>
        <form id='check{$id}' action='/{$root}/_inc/process.php' method='post'>
            <input type='hidden' name='process' value='checkbox'/>
            <input type='hidden' name='id' value='{$id}'/>
            <input type='hidden' name='state_be' value='{$state_be}'/>
        </form>
        <form id='delete{$id}' action='/{$root}/_inc/process.php' method='post'>
            <input type='hidden' name='process' value='delete-switch'/>
            <input type='hidden' name='id' value='{$id}'/>
        </form>

        {$data['name']} <label class=\"switch\" onclick=\"check{$id}.submit()\">
            <input type=\"checkbox\"{$checked}>
            <span class=\"slider\"></span>
        </label>
        <i class=\"far fa-minus-square fa-lgx\" aria-hidden=\"true\"
        onclick=\"delete{$id}.submit()\"></i>
    </div>
    ";
}

$trs='';
if(!isset($_POST['times_ago'])){
    $sql="select * from doorlock1_history";
    $res=query($conn,$sql);
    while($data=fetch($res)){
        $name=$data['name'];
        $time=substr($data['time'],0,16);
        $trs="
        <tr>
        <td>{$name} {$time} 출입하였습니다.</td>
        </tr>
        ".$trs;
    }
}else{
    $ago=$_POST['times_ago'];
    if($ago==='3hours'){
        $sql="select * from doorlock1_history 
        where time <= date_add(now(),interval -3 hour)";
        $res=query($conn,$sql);
        while($data=fetch($res)){
            $name=$data['name'];
            $time=substr($data['time'],0,16);
            $trs="
            <tr>
            <td>{$name} {$time} 출입하였습니다.</td>
            </tr>
            ".$trs;
        }
    }else if($ago==='1day'){
        $sql="select * from doorlock1_history 
        where time <= date_add(now(),interval -1 day)";
        $res=query($conn,$sql);
        while($data=fetch($res)){
            $name=$data['name'];
            $time=substr($data['time'],0,16);
            $trs="
            <tr>
            <td>{$name} {$time} 출입하였습니다.</td>
            </tr>
            ".$trs;
        }
    }else if($ago==='1week'){
        $sql="select * from doorlock1_history 
        where time <= date_add(now(),interval -7 day)";
        $res=query($conn,$sql);
        while($data=fetch($res)){
            $name=$data['name'];
            $time=substr($data['time'],0,16);
            $trs="
            <tr>
            <td>{$name} {$time} 출입하였습니다.</td>
            </tr>
            ".$trs;
        }
    }
}
?>