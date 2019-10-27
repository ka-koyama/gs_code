<?php
session_start();
include("funcs.php");
logincheck();

$pdo = db_conn();
$url = $_SERVER['REQUEST_URI']; //ドメイン以下のurlを取得

    if(strstr($url,'comic')==true){
        $stmt      = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='コミック'");
        $statues = $stmt->execute();
        $view    = "";
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
        }
    elseif(strstr($url,'lightnovel')==true){
        $stmt    = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='ラノベ'");
        $statues = $stmt->execute();
        $view    = "";
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
        }
    elseif(strstr($url,'novel')==true){
        $stmt    = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category LIKE'小説%'");
        $statues = $stmt->execute();
        $view    = "";
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
        }
    elseif(strstr($url,'kids')==true){
        $stmt    = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='絵本・児童書'");
        $statues = $stmt->execute();
        $view    = "";
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
        }
    elseif(strstr($url,'capture')==true){
        $stmt    = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='攻略本'");
        $statues = $stmt->execute();
        $view    = "";
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
        }
        elseif(strstr($url,'magazine')==true){
            $stmt    = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='雑誌'");
            $statues = $stmt->execute();
            $view    = "";
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
            }
        elseif(strstr($url,'picture')==true){
            $stmt    = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='写真集'");
            $statues = $stmt->execute();
            $view    = "";
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
            }
        elseif(strstr($url,'zukan')==true){
            $stmt    = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='図鑑'");
            $statues = $stmt->execute();
            $view    = "";
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
            } 
        elseif(strstr($url,'academic')==true){
            $stmt    = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='教養'");
            $statues = $stmt->execute();
            $view    = "";
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
            } 
        elseif(strstr($url,'hobby')==true){
            $stmt    = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='趣味'");
            $statues = $stmt->execute();
            $view    = "";
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
            } 
        elseif(strstr($url,'business')==true){
            $stmt    = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='ビジネス・経済'");
            $statues = $stmt->execute();
            $view    = "";
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
            } 
        elseif(strstr($url,'computer')==true){
            $stmt    = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='コンピュータ・IT'");
            $statues = $stmt->execute();
            $view    = "";
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
            } 
        elseif(strstr($url,'health')==true){
            $stmt    = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='暮らし・健康'");
            $statues = $stmt->execute();
            $view    = "";
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
            } 
        elseif(strstr($url,'mypage')==true){
            $stmt    = $pdo->prepare("SELECT * FROM gs_bm_table WHERE regist = '$_SESSION[u_name]'");
            $statues = $stmt->execute();
            $view    = "";
                if($statues==false){
                    sql_error();
                }else{
                    while($r = $stmt->fetch(PDO::FETCH_ASSOC)){
                        $view .= "【タイトル】".$r["name"]."<br>";
                        $view .= "【著者】".$r["author"]."<br>";
                        $view .= "【カテゴリー】".$r["category"]."<br>";
                        $view .= "【URL】"."<a href='$r[url]' target='_blank' rel='noopener' >".$r["url"]."</a>"."<br>";
                        $view .= "　".'<a href = "detail.php?id='.$r["id"].'">'.編集.'</a>';
                        $view .= "　";
                        $view .= '<a href = "delete.php?id='.$r["id"].'">'.削除.'</a>';
                        $view .=  "<br>"."<br>"."<br>";
                    }
                }
            }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/select.css" rel="stylesheet">
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
        <div class="font">
        <?=$view?>
        </div>
        </div>



</body>
</html>