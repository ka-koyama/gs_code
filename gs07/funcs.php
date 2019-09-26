<?php   
//共通に使う関数を記述

//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続
function db_conn(){
    try {
    return new PDO('mysql:dbname=bookmark;charset=utf8;host=localhost','root','root');
      } catch (PDOException $e) {
    exit('DB Connection Error:'.$e->getMessage());
      }
}

//SQLエラー
function sql_error(){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}

//redirect("index.php")
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}



?>