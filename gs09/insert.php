<?php
session_start();
//1. POSTデータ取得
$id       = $_POST["id"];
$regist   = $_SESSION['u_name'];
$name     = $_POST["name"];
$author   = $_POST["author"];
$category = $_POST["category"];
$url      = $_POST["url"];


//2. DB接続
include("funcs.php");
$pdo = db_conn();

//3. データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id,regist,name,author,category,url)VALUES(:id,:regist,:name,:author,:category,:url)");
$stmt->bindValue(':id', $id, PDO::PARAM_INT); 
$stmt->bindValue(':regist', $regist, PDO::PARAM_STR); 
$stmt->bindValue(':name', $name, PDO::PARAM_STR);   //:nameに対して$nameを渡す
$stmt->bindValue(':author', $author, PDO::PARAM_STR);  
$stmt->bindValue(':category', $category, PDO::PARAM_STR);  
$stmt->bindValue(':url', $url, PDO::PARAM_STR); 
$status = $stmt->execute(); //実行

//4. データ登録処理後
if($status==false){
    sql_error();
}else{
    redirect("select.php");
}
?>

