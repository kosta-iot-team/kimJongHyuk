# 프론트앤드 코드에 백앤드 기능을 구현하였습니다

## php 코드의 시작

: <?php 로 시작합니다

    <?php

## 파일 불러오기

사용할 함수들 입니다

    include $_SERVER['DOCUMENT_ROOT'].'/hid/_inc/func.php';

## 파일 불러오기

이 페이지에서 사용하는 코드들 입니다

    include $_SERVER['DOCUMENT_ROOT']."/{$root}/_inc/hidden/hid.php";

## php 코드의 끝

: ?> 로 끝을 냅니다

    ?>

##

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

## php 값을 불러오기

스위치 데이터들을 담은 div 들이 담겨있습니다

                <?=$divs?>

##

                    <br>
                    <br>
                    <input class="favorite styled" id="homeiot"
                           type="button"
                           value="가전기구 등록하기"

## 버튼 클릭시

가전기구 등록할 수 있도록 하는 페이지로 넘어갑니다

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

## 숨겨진 폼

문을 열때 작동할 프로세스를 위한 것 입니다

                <form id='openform' action="/<?=$root?>/_inc/process.php" method='post'>
                    <input type="hidden" name='process' value='open'>
                </form>

##

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button

## 버튼 클릭시

숨겨진 폼이 제출되어 문을 여는 프로세스를 작동시킵니다

                onclick="
                    openform.submit();
                "

##

                class="plus-button plus-button--large">닫힘</button>
                <br>
                <br>문을 열려면 버튼을 눌러주세요.
                <br>
                <br>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <u>임시비밀번호발급</u>

## 로그아웃

로그아웃을 하여 로그인을 다시 할 떄 까지 도어락제어를 더 이상 못하게 됩니다

                <form action="/<?=$root?>/_inc/process.php" method='post'>
                    <input type="hidden" name='process' value='logout'>
                    <input type="submit" value='logout'>
                </form>

##

            </div>

            <div style="width: 400px;
                    height: 400px;
                    border: 0px solid grey;
                    box-shadow: 2px 2px 1px 1px #BDBDBD;
                    border-radius: 5px;
                    border-color:white;">
                <br><br>

## 숨겨진 폼

3시간 이전의 출입기록을 보여줄 프로세스를 돌리기 위함입니다

                <form action="." method='post' id='t_3hours'>
                    <input type="hidden" name='times_ago' value='3hours'>
                </form>

## 숨겨진 폼

하루 이전의 출입기록을 보여줄 프로세스를 돌리기 위함입니다

                <form action="." method='post' id='t_1day'>
                    <input type="hidden" name='times_ago' value='1day'>
                </form>

## 숨겨진 폼

일주일 이전의 출입기록을 보여줄 프로세스를 돌리기 위함입니다

                <form action="." method='post' id='t_1week'>
                    <input type="hidden" name='times_ago' value='1week'>
                </form>

##

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

## 글 클릭시

3시간 이전의 출입기록을 보여줄 프로세스를 작동시킵니다

                <span onclick='t_3hours.submit()'>3시간전</span> &middot;

## 글 클릭시

하루 이전의 출입기록을 보여줄 프로세스를 작동시킵니다

                <span onclick='t_1day.submit()'>하루전</span> &middot;

## 글 클릭시

일주일 이전의 출입기록을 보여줄 프로세스를 작동시킵니다

                <span onclick='t_1week.submit()'>일주일전</span>

##

                <ul>
                    <table style="width:322px;border: 2px solid lightgrey; border-radius: 5px;">

## php 값을 불러오기

출입기록 데이터들을 담은 tr 들이 담겨있습니다

                        <?=$trs?>

##

                    </table>
                </div>
            </div>
        </body>
    </html>
