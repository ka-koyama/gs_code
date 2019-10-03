<?php
session_start();  //ブラウザを閉じるまで有効
$lname = $_POST["lname"];
$lpw = $_POST["lpw"];

//1 接続
include("funcs.php");
$pdo = db_conn();

//2 データ登録SQL作成
$sql  = "SELECT * FROM gs_login WHERE u_name=:lname AND u_pw=:lpw";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lname', $lname);  
$stmt->bindValue(':lpw', $lpw);  
$status = $stmt->execute(); //実行

//3 SQL実行にエラーがある場合
if($status==false){
    sql_error();
}

//4 抽出データを1レコードだけ取得
$a = $stmt->fetch();  

//5 該当レコードがあればSESSIONに値を代入
if($a["id"] !=""){
    $_SESSION["chk_ssid"]  = session_id();
    $_SESSION["u_name"]    = $a['u_name'];
//OKならばselect.phpへ
    header("Location: select.php");
}else{
//NGならば再びlogin.phpへ
    echo 'Error:'.'ユーザ名とパスワードを確認してください。'."<br>".'<a href="login.php">ログイン画面へ</a>';
    
}
exit();
?>

