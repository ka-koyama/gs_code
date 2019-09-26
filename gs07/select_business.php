<?php
include("funcs.php");
$pdo = db_conn();

//2.データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='ビジネス・経済'");
$statues = $stmt->execute();

//3.データ表示
$view="";
if($statues==false){
    sql_error();
}else{
    while($r = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= "【タイトル】".$r["name"]."<br>"."【著者】".$r["author"]."<br>"."【カテゴリー】".$r["category"].
                 "<br>"."【URL】"."<a href='$r[url]' target='_blank' rel='noopener' >".$r["url"]."</a>".
                 "<br>"."<br>"."<br>";
    }
}
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
        <h1>ビジネス・経済</h1>
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
</body>
<footer>

</footer>
</html>