<?php 
include "../root.php";
/* 
{$root} 
<?=$root?>
*/
include $_SERVER['DOCUMENT_ROOT']."/{$root}/_inc/func.php";
include $_SERVER['DOCUMENT_ROOT']."/{$root}/_inc/hidden/home.php";
?>
<link href="/<?=$root?>/_inc/css/css.css" rel="stylesheet"/>
<html>
    <head>
        <title>홈</title>
    </head>
    <body style='height:95%;'>
        <div class="center" style='height:95%;margin-right:0px;'>
            <div class="box">
                <div class="center" style='height:100%;'>
                    <div class="middle" style='width:90%;'>
                        <div class='center' style='height:85%;'>
                            <div style='width:100%;margin-top:20px;'>
                                <?=$switchs?> 
                                <br>
                            </div>
                        </div> 
                        <div class='center' style='height:15%;'>
                            <div class='text-center'>
                                <input class="styled" 
                                onclick="location.href='regist-apparatus'"
                                type="button"
                                value="가전기구 등록하기">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        <div class="center" style='height:95%;margin-left:30px;margin-right:30px;'>
            <div class="box">
                <div class='flex' style='height:10%;'>
                    <div style='margin-top:15px;margin-left:15px;'>
                        <?=$span_admin?>
                        <span class='span' onclick='location.href="infor-update"'>정보수정</span>
                    </div>
                    <div class="text-right" style='margin-top:15px;margin-right:15px;'>
                        <span class='span-red' onclick='if(confirm("로그아웃 하시겠습니까"))logout.submit()'>로그아웃</span>
                    </div>
                </div>
                <div class='center' style='height:75%;'>
                    <div class='text-center' style='margin-bottom:50px;'>
                        <button class="plus-button plus-button--large"
                        onclick="
                            openform.submit();
                        "
                        style="margin-top:80px;">열기</button>
                        <br>
                        <p>문을 열려면 버튼을 눌러주세요.</p>
                    </div>
                </div>
                <div class='center' style='height:15%;'>
                    <div class='text-center'>
                        <input class="styled" type="button"
                        value="임시비밀번호발급"
                        onclick="alert('미완성!')">
                    </div>
                </div>
            </div>
        </div>
        <div class="center" style='height:95%;margin-left:0px;'>
            <div class="box">
                <div class="flex" style='width:90%;margin:auto;margin-top:15px;margin-bottom:10px;'>
                    <div style='margin-left:auto;'>
                        <span class='span' onclick="location.href='/<?=$root?>/home'">지금</span> &middot; 
                        <span class='span' onclick='t_3hours.submit()'>3시간전</span> &middot; 
                        <span class='span' onclick='t_1day.submit()'>하루전</span> &middot; 
                        <span class='span' onclick='t_1week.submit()'>일주일전</span>
                    </div>
                </div>
                <div style="
                    height:82%;
                    width:80%;
                    padding-left:5px;
                    border:2px solid lightgrey;
                    border-radius:5px;
                    margin:auto;
                    overflow-y:scroll;
                ">
                    <table style="width:100%;">
                        <?=$trs?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>