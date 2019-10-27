<?php
//1. POSTデータ取得
$id     = $_POST["id"];
$u_name = $_POST["u_name"];
$u_pw   = $_POST["u_pw"];



//2. DB接続
include("funcs.php");
$pdo = db_conn();

//3. データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_login(id,u_name,u_pw)VALUES(:id,:u_name,:u_pw)");
$stmt->bindValue(':id',     $id,     PDO::PARAM_INT); 
$stmt->bindValue(':u_name', $u_name, PDO::PARAM_STR);   //:nameに対して$nameを渡す 
$stmt->bindValue(':u_pw',   $u_pw,   PDO::PARAM_STR);  
$status = $stmt->execute(); //実行

//4. データ登録処理後
if($status==false){
    sql_error();
}else{
    redirect("login.php");
}
?>

