<?php 
include "root.php";
/* 
{$root} 
<?=$root?>
*/
include $_SERVER['DOCUMENT_ROOT']."/{$root}/_inc/func.php";
include $_SERVER['DOCUMENT_ROOT']."/{$root}/_inc/hidden/root.php";
?>
<link href="/<?=$root?>/_inc/css/css.css" rel="stylesheet"/>
<html>
    <head>        
        <title>로그인</title>
    </head>
    <body style='height:95%;'>
        <div class="center" style='height:95%'>
            <div class="box">
                <div class='center' style='height:40%;'>
                    <p class='middle' style='text-align:center;margin-top:70px;'>
                        홈IoT도어록
                        <br>
                        <img src="_inc/img/root.png"
                        style='
                        width: 50px;
                        margin: 20px;
                        '>
                    </p>
                </div>
                <div class="middle" style='height:60%;'>
                    <form action="/<?=$root?>/_inc/process.php" method='post' onsubmit="
                        if(id.value.trim(' ')==''){
                            alert('id를 입력');
                            id.value='';
                            id.focus();
                            return false;
                        }else if(passwd.value.trim(' ')==''){
                            alert('password를 입력');
                            passwd.value='';
                            passwd.focus();
                            return false;
                        }else{
                                    id.value=id.value.trim(' ');
                                    passwd.value=passwd.value.trim(' ');
                                    submit();
                                }
                                ">
                        <input type="hidden" name='process' value='login'>
                        <div class="text-center" style='height:40%;'>
                            <input class='textbox' type="text" name='id' placeholder='Id'>
                            <br>
                            <input class='textbox' type="password" name='passwd' placeholder='Password'>
                        </div>
                        <div class='flex' style="align-items:flex-end;height:40%;">
                            <div class="text-right" style='margin-bottom:10px;margin-right:50px;'>
                                <span class='styled' onclick="location.href='sign-up'"
                                style="border-radius:5px;font-size:14px;">회원가입</span>
                            </div>
                        </div>
                        <div class='flex' style='align-items:flex-end;height:20%;'>
                            <div class="text-center" style='padding-bottom:12px;'>
                                <input type="submit" class='styled' value='로그인'>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class='box' style='margin-left:20px;'>
                <div class="center" style='height:100%;'>
                    <div class="text-center">
                        <p>
                            정보 수정할려면 로그인 후 바꾸세요
                        </p>
                        <table style='text-align:center;width:100%;'>
                            <tr>
                                <td>이름</td><td>아이디</td><td>비밀번호</td>
                            </tr>
                            <tr>
                                <td>고동호</td><td>go</td><td>1111</td>
                            </tr>
                            <tr> 
                                <td>조범구</td><td>jo</td><td>1111</td> 
                            </tr>
                            <tr>
                                <td>임표정</td><td>lim</td><td>1111</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>