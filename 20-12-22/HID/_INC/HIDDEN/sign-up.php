<?php
session_start();
if(isset($_SESSION["login-{$ROOT}"])){?>
    <script>
        location.href='<?=$ROOT?>';
    </script><?php
    exit;
}
?>