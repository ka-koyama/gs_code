<!--ログイン認証-->
<?php
session_start();
include("funcs.php");
logincheck();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>本をブックマーク</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
<header>
        <div class="flex">
        <h1>ブックマーク一覧</h1>
        <span class="user"><?php echo "ようこそ ".$_SESSION['u_name']."</a>". " さん";?></span>
        <a href="logout.php" class="btn_square_2">ログアウト</a>
        </div>  
        <a href="select.php" class="btn_square_1">一覧画面</a>
        <a href="index.php" class="btn_square_1">追加画面</a>
</header>
        <div class="flex">
        <div class="left">
        <form action="show.php" method="GET">
            <input type="hidden" name="category" value="comic">
            <input type="submit" value="コミック" class="btn_square">
        </form>
        <form action="show.php" method="GET">
            <input type="hidden" name="category" value="lightnovel">
            <input type="submit" value="ラノベ" class="btn_square">
        </form>
        <form action="show.php" method="GET">
            <input type="hidden" name="category" value="novel">
            <input type="submit" value="小説" class="btn_square">
        </form>
        <form action="show.php" method="GET">
            <input type="hidden" name="category" value="kids">
            <input type="submit" value="絵本・児童書" class="btn_square">
        </form>
         <form action="show.php" method="GET">
            <input type="hidden" name="category" value="capture">
            <input type="submit" value="攻略本" class="btn_square">
        </form>
        <form action="show.php" method="GET">
            <input type="hidden" name="category" value="magazine">
            <input type="submit" value="雑誌" class="btn_square">
        </form>
        <form action="show.php" method="GET">
            <input type="hidden" name="category" value="picture">
            <input type="submit" value="写真集" class="btn_square">
        </form>
        <form action="show.php" method="GET">
            <input type="hidden" name="category" value="zukan">
            <input type="submit" value="図鑑" class="btn_square">
        </form>
        <form action="show.php" method="GET">
            <input type="hidden" name="category" value="academic">
            <input type="submit" value="教養" class="btn_square">
        </form>
        <form action="show.php" method="GET">
            <input type="hidden" name="category" value="hobby">
            <input type="submit" value="趣味" class="btn_square">
        </form>
        <form action="show.php" method="GET">
            <input type="hidden" name="category" value="business">
            <input type="submit" value="ビジネス・経済" class="btn_square">
        </form>
        <form action="show.php" method="GET">
            <input type="hidden" name="category" value="computer">
            <input type="submit" value="コンピュータ・IT" class="btn_square">
        </form>
        <form action="show.php" method="GET">
            <input type="hidden" name="category" value="health">
            <input type="submit" value="暮らし・健康" class="btn_square">
        </form>
        <form action="show.php" method="GET">
            <input type="hidden" name="category" value="mypage">
            <input type="submit" value="マイページ" class="btn_square">
        </form>
        </div>
        
        <form method="POST" action="insert.php">
        <div class="form">
            <fieldset> <!--フォームをグループ化する→tabで次の入力キーに移れる-->
                <legend>本の情報を入力</legend> <!--グループ化したフォームにタイトルをつける-->
                <label><input type="text" name="name" class="textbox_1" placeholder="タイトルを入力"></label><br>
                <label><input type="text" name="author" class="textbox_1" placeholder="著者を入力"></label><br>
                <label><select name="category" class="textbox_2">
                    <option value="">カテゴリーを選択</option>
                    <option value="コミック">コミック</option>
                    <option value="ラノベ">ラノベ</option>
                    <option value="小説（社会・歴史）">小説（社会・歴史）</option>
                    <option value="小説（ミステリー・サスペンス・ハードボイルド）">小説（ミステリー・サスペンス・ハードボイルド）</option>
                    <option value="小説（SF・ホラー・ファンタジー）">小説（SF・ホラー・ファンタジー）</option>
                    <option value="絵本・児童書">絵本・児童書</option>
                    <option value="攻略本">攻略本</option>
                    <option value="雑誌">雑誌</option>
                    <option value="写真集">写真集</option>
                    <option value="図鑑">図鑑</option>
                    <option value="教養">教養</option>
                    <option value="趣味">趣味</option>
                    <option value="ビジネス・経済">ビジネス・経済</option>
                    <option value="コンピュータ・IT">コンピュータ・IT</option>
                    <option value="暮らし・健康">暮らし・健康</option>
                    </select>
                </label><br>
                <label><input type="text" name="url" class="textbox_1" placeholder="関連URLを入力"></label><br><br>
                <input type="submit" value="追加" class="btn_square_4">
            </fieldset>
        </div>
        </form>
        </div>

</body>
</html>