<?php 
include "../../_INC/ROOT.php";
include $_SERVER['DOCUMENT_ROOT']."{$ROOT}/_inc/func.php";
include $_SERVER['DOCUMENT_ROOT']."{$ROOT}/_inc/hidden/member-control.php";
include $_SERVER['DOCUMENT_ROOT']."{$ROOT}/_INC/CSS/CSS.php";
?>
<html>
    <head>
        <title>회원 관리</title>
    </head>
    <body style='height:95%;'>
        <div class="center" style='height:95%'>
            <div class="box">
                <div class='flex' style='height:10%;'>
                    <div class="text-right" style='margin-top:15px;margin-right:15px;'>
                        <span class='span' style='height:20px;' onclick='location.href=".."'>뒤로</span>
                    </div>
                </div>
                <div class="middle" style='width:95%;height:90%;'>
                    <div class='center' style='height:85%;'>
                        <div class='text-center' style='width:100%;'>
                            <table style='width:100%;text-align:center;border-collapse: collapse;
                            '>
                            <style>
                                td{
                                    border:1px solid gray;
                                }
                            </style>
                                <tr style='height:40px;'>
                                    <td>이름</td>  
                                    <td>아이디</td>
                                    <td>비밀번호</td>
                                    <td>수정</td>
                                    <td>삭제</td>
                                </tr>
                                <?=$trs?>
                            </table>
                        </div>
                    </div> 
                    <div class="flex" style='height:15%;align-items:flex-end'>
                        <div class="text-center" style='padding-bottom:12px;'>
                            <input onclick="location.href='member-add'" type="button" class='styled' value='회원등록'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>