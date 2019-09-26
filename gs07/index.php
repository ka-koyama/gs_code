<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>本をブックマーク</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>ブックマークに追加</h1>
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
                <input type="submit" value="追加" class="btn_square_2">
            </fieldset>
        </div>
    </form>

</body>
</html>