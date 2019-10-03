<?php
session_start();
include("funcs.php");
logincheck();
//1 DB接続
$pdo = db_conn();

//2.データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$statues = $stmt->execute();

//3.データ表示
$view="";
if($statues==false){
    sql_error();
}else{
    while($r = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= "　".$r['regist']."さんが追加しました。"."<br>";
        $view .= "【タイトル】".$r["name"]."<br>";
        $view .= "【著者】".$r["author"]."<br>";
        $view .= "【カテゴリー】".$r["category"]."<br>";
        $view .= "【URL】"."<a href='$r[url]' target='_blank' rel='noopener' >".$r["url"]."</a>"."<br>";
        $view .=  "<br>"."<br>"."<br>";
      

    }
}
//target="_blank"はセキュリティ上危険なので、rel="noopener"を書いておく
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ブックマークされた本</title>
    <link href="css/select.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="flex">
        <h1>ブックマーク一覧</h1>
        <a href="select_user.php" class="btn_square_3">登録ユーザー</a>
        <a href="logout.php" class="btn_square_2">ログアウト</a>
        <span class="user"><?php echo "ようこそ ".'<a href = "mybook.php">'.$_SESSION['u_name']."</a>". " さん";?></span>
        </div>  
        <a href="select.php" class="btn_square_1">一覧画面</a>
        <a href="select_comic.php" class="btn_square">コミック</a>
        <a href="select_lightnovel.php" class="btn_square">ラノベ</a>
        <a href="select_novel.php" class="btn_square">小説</a>
        <a href="select_picturebook.php" class="btn_square">絵本・児童書</a>
        <a href="select_strategybook.php" class="btn_square">攻略本</a>
        <a href="select_magazine.php" class="btn_square">雑誌</a>
        <a href="select_photobook.php" class="btn_square">写真集</a>
        <a href="index.php" class="btn_square_1">追加画面</a>
        <a href="select_zukan.php" class="btn_square">図鑑</a>
        <a href="select_academic.php" class="btn_square">教養</a>
        <a href="select_hobby.php" class="btn_square">趣味</a>
        <a href="select_business.php" class="btn_square">ビジネス・経済</a>
        <a href="select_computer.php" class="btn_square">コンピュータ・IT</a>
        <a href="select_life.php" class="btn_square">暮らし・健康</a>
    </header>
    <div class="font">
        <?=$view?>
    </div>


<script>

</script>

</body>
<footer>

</html>