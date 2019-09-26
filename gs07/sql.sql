INSERT INTO gs_bm_table(name,category,url,comment,indate)VALUES(:name,:category,:url,:comment,sysdate()) ;

$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE category ='コミック'");
$statues = $stmt->execute();
