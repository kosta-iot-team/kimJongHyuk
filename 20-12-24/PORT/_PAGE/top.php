   
<form id='kim' action="Member.php" method='post'>
    <input type="hidden" name='who' value='김종혁'>
</form>
<form id='jo' action="Member.php" method='post'>
    <input type="hidden" name='who' value='조범구'>
</form>
<form id='go' action="Member.php" method='post'>
    <input type="hidden" name='who' value='고동호'>
</form>
<form id='lim' action="Member.php" method='post'>
    <input type="hidden" name='who' value='임표정'>
</form>

<?php
$tech조범구="Project Manager<br>백엔드";
$tech김종혁="웹 프론트엔드<br>웹 백엔드";
$tech고동호="하드웨어<br>프로그래밍";
$tech임표정="프론트엔드<br>보고서";
?>
<div class="top">
    <div class='members'>
        <div class="member" onclick="kim.submit()">
            <img class='member-img' src="__INC/_IMG/김종혁2.jpg" alt="">
            <div class="infor">
                <div class="tech">
                    <?=$tech김종혁?>
                </div>
                <div class="name">
                    김종혁
                </div>
            </div>
        </div>
        <div class="member" onclick="jo.submit()">
            <img class='member-img' src="__INC/_IMG/조범구.jpg" alt="">
            <div class="infor">
                <div class="tech">
                    <?=$tech조범구?>
                </div>
                <div class="name">
                    조범구
                </div>
            </div>
        </div>
        <div class="member" onclick="go.submit()">
            <img class='member-img' src="__INC/_IMG/고동호.jpg" alt="">
            <div class="infor">
                <div class="tech">
                    <?=$tech고동호?>
                </div>
                <div class="name">
                    고동호
                </div>
            </div>
        </div>
        <div class="member" onclick="lim.submit()">
            <img class='member-img' src="__INC/_IMG/임표정.jpg" alt="">
            <div class="infor">
                <div class="tech">
                    <?=$tech임표정?>
                </div>
                <div class="name">
                    임표정
                </div>
            </div>
        </div>
    </div>
</div>