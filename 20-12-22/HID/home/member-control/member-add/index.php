<?php 
include "../../../_INC/ROOT.php";
include $_SERVER['DOCUMENT_ROOT']."{$ROOT}/_inc/func.php";
include $_SERVER['DOCUMENT_ROOT']."{$ROOT}/_inc/hidden/member-add.php";
include $_SERVER['DOCUMENT_ROOT']."{$ROOT}/_inc/CSS/CSS.php";
?>
<html>
    <head>
        <title>회원 등록</title>
    </head>
    <body style='height:95%;'>
        <div class="center" style='height:95%'>
            <div class="box">
                <div class='flex' style='height:10%;'>
                    <div class="text-right" style='margin-top:15px;margin-right:15px;'>
                        <span class='span' style='height:20px;' onclick="location.href='..'">뒤로</span>
                    </div>
                </div>
                <div class="middle" style='width:90%;height:90%;'>
                    <form action="<?=$ROOT?>/_inc/process.php" method='post' onsubmit="
                    if(name.value.trim(' ')==='')
                    {
                        alert('빈칸을 채워주세요.');
                        name.value='';
                        name.focus();
                        return false;
                    }else if(name.value.indexOf(' ')>-1){
                        alert('띄워쓰기를 하지마세요.');
                        name.value='';
                        name.focus();
                        return false;
                    }
                    ">
                        <input type="hidden" name='process' value='member-add'>
                        <div class="center" style='height:80%;'>
                            <div class="text-center">
                                <input type="text" class='textbox' name='name' placeholder='Name'><br>
                            </div>
                        </div>
                        <div class="flex" style="align-items:flex-end;height:20%;">
                            <div class="text-center" style="padding-bottom:12px;">
                                <input type="submit" value='등록' class='styled'>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>