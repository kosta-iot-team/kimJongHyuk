<?php 
include "../_INC/ROOT.php";
include $_SERVER['DOCUMENT_ROOT']."{$ROOT}/_INC/FUNC.php";
include $_SERVER['DOCUMENT_ROOT']."{$ROOT}/_INC/HIDDEN/sign-up.php";
include $_SERVER['DOCUMENT_ROOT']."{$ROOT}/_INC/CSS/CSS.php";
?>
<html>
    <head>
        <title>정보 수정</title>
    </head>
    <body style='height:95%;'>
        <div class="center" style='height:95%'>
            <div class="box">
                <div class='flex' style='height:10%;'>
                    <div class="text-right" style='margin-top:15px;margin-right:15px;'>
                        <a class='span' style='height:20px;' onclick="location.href='..';">뒤로</a>
                    </div>
                </div>
                <div class='text-center' style='height:90%;'>
                    <form style='height:100%;' action="<?=$ROOT?>/_inc/process.php" method='post' onsubmit="
                    if(name.value.trim(' ')===''){
                        alert('빈칸을 채워주세요.');
                        name.value='';
                        name.focus();
                        return false;
                    }else if(name.value.indexOf(' ')>-1){
                        alert('띄워쓰기를 하지마세요.');
                        name.value='';
                        name.focus();
                        return false;
                    }else if(id.value.trim(' ')===''){
                        alert('빈칸을 채워주세요.');
                        id.value='';
                        id.focus();
                        return false;
                    }else if(id.value.indexOf(' ')>-1){
                        alert('띄워쓰기를 하지마세요.');
                        id.value='';
                        id.focus();
                        return false;
                    }else if(passwd.value.trim(' ')===''){
                        alert('빈칸을 채워주세요.');
                        passwd.value='';
                        passwd.focus();
                        return false;
                    }else if(passwd.value.indexOf(' ')>-1){
                        alert('띄워쓰기를 하지마세요.');
                        passwd.value='';
                        passwd.focus();
                        return false;
                    }else if(passwd.value!==passwd2.value){
                        alert('비밀번호가 다릅니다.');
                        passwd2.value='';
                        passwd2.focus();
                        return false;
                    }
                    ">
                        <div class='center' style='height:80%;'>
                            <div class='text-center'>
                                <input type="hidden" name='process' value='sign-up'>
                                <input type="text" class='textbox' name='name' placeholder='Name'><br>
                                <input type="text" class='textbox' name='id' placeholder='Id'><br>
                                <input type="password" class='textbox' name='passwd' placeholder='Password'><br>
                                <input type="password" class='textbox' name='passwd2' placeholder='Password'><br>
                            </div>
                        </div>
                        <div class="flex" style='align-items:flex-end;height:20%;'>
                            <div class="text-center" style='padding-bottom:12px;'>
                                <input type="submit" value='등록' class='styled'>
                            </div>    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>