<?php
function conn(){
    $conn=mysqli_connect('localhost','root','111111','hid');
    if(!$conn){
        ?><script>
            alert('문제가 생겼습니다.');
        </script><?php
        exit;
    }
    return $conn;
}
function query($conn,$sql){
    $result=mysqli_query($conn,$sql);
    if(!$result){
        ?><script>
            alert('문제가 생겼습니다.');
        </script><?php
        exit;
    }
    return $result;
}
function fetch($result){
    $data=mysqli_fetch_array($result);
    return $data;
}
function escape($conn,$str){
    return mysqli_real_escape_string($conn,$str);
}

function htmlchars($chars){
    return htmlspecialchars($chars);
}
?>
