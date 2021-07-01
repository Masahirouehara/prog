<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ダイエット記録</title>
</head>
<body>

<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ダイエット記録</legend>
     <label>日付：<input type="date" name="date"></label><br>
     <label>身長：<input type="text" name="tall"></label><br>
     <label>体重：<input type="text" name="KG"></label><br></input></label><br>
     <input type="submit" value="送信">
     <button><a href="select.php">推移</a></button>
    </fieldset>
  </div>
</form>


</body>
</html>
