<?php
session_start();

//SESSIONを初期化
$_SESSION = array();

//cookieに保存してあるsessionIDを無効化
if (isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-42000,'/');
}

//サーバー側でのsessionidを破棄
session_destroy();

//login.phpへリダイレクト
header("Location: login.php");
exit();

?>