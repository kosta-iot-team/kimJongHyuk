<?php 
include "root.php";
include $_SERVER['DOCUMENT_ROOT']."/{$root}/_inc/func.php";
include $_SERVER['DOCUMENT_ROOT']."/{$root}/_inc/hidden/hid.php";
?>
<!doctype html>
<html>
    <head>
        <META CHERSET='UTF-8'>
        <link rel="stylesheet" href="_inc/css/MP1style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/f8aeef902d.js" crossorigin="anonymous"></script>
        <script defer src="_inc/JS/CHIP.js"></script>
        <title>MainPageAfter</title>
    </head>
    <body>
        <div id="box">
            <div style="width: 280px;
                    height: 400px;
                    border: 0px solid grey;
                    box-shadow: 2px 2px 1px 1px #BDBDBD;
                    border-radius: 5px;
                    border-color:white;">
                <!--스위치 이름 저희 프로젝트 DIY 홈 전등 이름에 맞춰 주세요-->
                
                <ul>
                <?=$divs?>

                    <br>
                    <br>
                    <input class="favorite styled" id="homeiot"
                           type="button"
                           value="가전기구 등록하기"
                           onclick="location.href='regist'">
            </div>

            <div style="width: 280px;
                    height: 400px;
                    border: 0px solid grey;
                    box-shadow: 2px 2px 1px 1px #BDBDBD;
                    border-radius: 5px;
                    border-color:white;
                    float:inherit">
                <br>
                <br>
                <ul>
                    <form id='openform' action="/<?=$root?>/_inc/process.php" method='post'>
                        <input type="hidden" name='process' value='open'>
                    </form>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button
                    onclick="
                        openform.submit();
                    "
                    class="plus-button plus-button--large">닫힘</button>
                    <br>
                    <br>문을 열려면 버튼을 눌러주세요.
                    <br>
                    <br>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <u>임시비밀번호발급</u>
                <form action="/<?=$root?>/_inc/process.php" method='post'>
                    <input type="hidden" name='process' value='logout'>
                    <input type="submit" value='logout'>
                </form>
            </div>

            <div style="width: 400px;
                    height: 400px;
                    border: 0px solid grey;
                    box-shadow: 2px 2px 1px 1px #BDBDBD;
                    border-radius: 5px;
                    border-color:white;">
                <br><br>
                <form action="." method='post' id='t_3hours'>
                    <input type="hidden" name='times_ago' value='3hours'>
                </form>
                <form action="." method='post' id='t_1day'>
                    <input type="hidden" name='times_ago' value='1day'>
                </form>
                <form action="." method='post' id='t_1week'>
                    <input type="hidden" name='times_ago' value='1week'>
                </form>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span onclick='t_3hours.submit()'>3시간전</span> &middot; 
                <span onclick='t_1day.submit()'>하루전</span> &middot; 
                <span onclick='t_1week.submit()'>일주일전</span>
                <ul>
                    <table style="width:322px;border: 2px solid lightgrey; border-radius: 5px;">
                        <?=$trs?>
                    </table>
            </div>
        </div>
    </body>
</html>