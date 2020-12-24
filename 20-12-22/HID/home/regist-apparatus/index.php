<?php 
include "../../_INC/ROOT.php";
include $_SERVER['DOCUMENT_ROOT']."{$ROOT}/_INC/FUNC.php";
include $_SERVER['DOCUMENT_ROOT']."{$ROOT}/_INC/HIDDEN/regist-apparatus.php";
include $_SERVER['DOCUMENT_ROOT']."{$ROOT}/_INC/CSS/CSS.php";
?>
<html>
    <head>
        <title>가전기구 등록하기</title>
    </head>
    <body style='height:95%;'>
        <div class="center" style='height:95%'>
            <div class="box">
                <div class='flex' style='height:10%;'>
                    <div class="text-right" style='margin-top:15px;margin-right:15px;'>
                        <span class='span' onclick='location.href=".."'>뒤로</span>
                    </div>
                </div>
                <div class="center" style='height:90%;'>
                    <div class="middle" style='width:90%;height:100%;'>
                        <form action="<?=$ROOT?>/_INC/PROCESS.php" method='post' onsubmit="
                            if(name.value.trim(' ')==''){
                                alert('이름을 입력해주세요!');
                                name.value='';
                                name.focus();
                                return false;
                            }
                            ">
                            <div class='center' style="height:80%">
                                <div class="text-center">
                                    <input type="hidden" name='process' value='regist-apparatus'>
                                    <input type="text" class='textbox' name='name' placeholder='Name'>
                                </div>
                            </div>
                            <div class='flex' style="align-items:flex-end;height:20%;">
                                <div class="text-center" style='padding-bottom:12px;'>
                                    <input class="styled" type="submit" value='등록'>
                                </div>    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>