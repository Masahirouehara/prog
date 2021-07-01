<?php
try {
    $pdo = new PDO('mysql:dbname=b_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('データベースに接続できませんでした。'.$e->getMessage());
}

$stmt = $pdo->prepare("SELECT * FROM b_table");
$status = $stmt->execute();

$view="";
if ($status==false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= "<p>";
        $view .= $result["date"]."　".$result["tall"]."cm"."　".$result["KG"]."kg";
        $view .= "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>推移</title>
</head>
<body>
<header>身長と体重の推移</header>
<div>
    <?=$view?>
    </div>
</body>
</html>
