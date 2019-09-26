<?php
//1. POSTデータ取得
$name     = $_POST["name"];
$author   = $_POST["author"];
$category = $_POST["category"];
$url      = $_POST["url"];


//2. DB接続
include("funcs.php");
$pdo = db_conn();

//3. データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(name,author,category,url)VALUES(:name,:author,:category,:url)");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);   //:nameに対して$nameを渡す
$stmt->bindValue(':author', $author, PDO::PARAM_STR);  
$stmt->bindValue(':category', $category, PDO::PARAM_STR);  
$stmt->bindValue(':url', $url, PDO::PARAM_STR); 
$status = $stmt->execute(); //実行

//4. データ登録処理後
if($status==false){
    sql_error();
}else{
    redirect("index.php");
}
?>

