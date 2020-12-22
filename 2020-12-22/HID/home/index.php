<?php 
include "../_INC/ROOT.php";
include $_SERVER['DOCUMENT_ROOT']."/{$ROOT}/_iNC/FUNC.php";
include $_SERVER['DOCUMENT_ROOT']."/{$ROOT}/_iNC/HIDDEN/home.php";
include $_SERVER['DOCUMENT_ROOT']."/{$ROOT}/_iNC/CSS/CSS.php";
?>
<html>
    <head>
        <title>홈IoT도어록</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body style='height:95%;'>
        <div class="center" style='height:95%;margin-right:0px;'>
            <div class="box">
                <div class="center" style='height:100%;'>
                    <div class="middle" style='width:90%;'>
                        <div class='center' style='height:85%;'>
                            <div style='width:100%;margin-top:20px;padding-right:30px;'>
                                <?=$switchs?> 
                            </div>
                        </div> 
                    <div class="flex" style='height:15%;align-items:flex-end'>
                        <div class="text-center" style='padding-bottom:12px;'>
                                <input class="styled" 
                                onclick="location.href='regist-apparatus'"
                                type="button"
                                value="가전기구 등록하기">
                                
                                <!-- 팝업 될 레이어 -->
                                <div class="modal">
                                    <div class="modal-content">
                                        <span class="close-button">&times;</span>
                                        <!--<h1 class="title">가전기구 선택</h1>-->
                                        <br><br>
                                        <form id="form">
                                            <b style="font-size: 14px;">홈IoT</b>
                                            <select name="home">
                                                <option value="">기기선택</option>
                                                <option value="거실">거실</option>
                                                <option value="거실스탠드">거실스탠드</option>
                                                <option value="화장실">화장실</option>
                                                <option value="침실">침실</option>
                                                <option value="TV">TV</option>
                                                <option value="에어컨">에어컨</option>
                                            </select>
                                            <br>
                                            <input type="submit" id="submit" value="확인">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="center" style='height:95%;margin-left:15px;margin-right:15px;'>
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
                    <div class="flex" style='height:15%;align-items:flex-end'>
                        <div class="text-center" style='padding-bottom:12px;'>
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
                        <span class='span' onclick="location.href='<?=$ROOT?>/home'">지금</span> &middot; 
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