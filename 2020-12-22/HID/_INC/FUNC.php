<?php
function mC(){
    return mysqli_connect('localhost','root','111111','hid');
}
function mQ($conn,$sql){
    return mysqli_query($conn,$sql);
}
function mF($result){
    return mysqli_fetch_array($result);
}
function mE($conn,$str){
    return mysqli_real_escape_string($conn,$str);
}
function hS($chars){
    return htmlspecialchars($chars);
}
?>