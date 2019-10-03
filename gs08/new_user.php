<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form method="POST" action="insert_user.php">
        <div class="jumbotron">
            <fieldset> <!--フォームをグループ化する→tabで次の入力キーに移れる-->
                <legend>新規ユーザー登録</legend> <!--グループ化したフォームにタイトルをつける-->
                <label><input type="text" name="u_name" placeholder="username" required></label><br> <!--required→入力必須にする-->
                <label><input type="text" name="u_pw" placeholder="password" required></label><br>
                <input type="submit" value="登録">
            </fieldset>
            <a href="login.php">ログイン画面へ</a>
        </div>
    </form>

</body>
</html>

  
