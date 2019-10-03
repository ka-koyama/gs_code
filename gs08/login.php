<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>ログイン</title>
</head>
<body>
    <form method="POST" action="login_act.php">
        <div class="jumbotron">
            <fieldset> <!--フォームをグループ化する→tabで次の入力キーに移れる-->
                <legend>ログイン</legend> <!--グループ化したフォームにタイトルをつける-->
                <label><input type="text" name="lname" placeholder="username" required></label><br>
                <label><input type="text" name="lpw" placeholder="password" required></label><br>
                <input type="submit" value="ログイン" >
            </fieldset>
            <a href="new_user.php">新規ユーザー登録</a>
        </div>
    </form>

</body>
</html>