<?php
$id = $_GET['id'];
try {
  $pdo = new PDO('mysql:dbname=b_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}
$sql = "SELECT * FROM b_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();
if ($status==false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
} else {
    $row = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ダイエット記録</title>
</head>
<body>

<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ダイエット記録</legend>
     <label>日付：<input type="date" name="date" value="<?=$row["date"]?>"></label><br>
     <label>身長：<input type="text" name="tall" value="<?=$row["tall"]?>"></label><br>
     <label>体重：<input type="text" name="KG" value="<?=$row["KG"]?>"></label><br>
     <label>食事：<textArea name="meal" rows="1" cols="50"><?=$row["meal"]?></textArea></label><br>
     <input type='hidden' name="id" value="<?=$row["id"]?>">
     <input type="submit" value="送信">
     <button><a href="select.php">推移</a></button>
    </fieldset>
  </div>
</form>


</body>
</html>