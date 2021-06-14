<?php
$hand = ['グー', 'チョキ', 'パー'];

if (isset($_POST['player'])) {
    $player = $_POST['player'];

    $key = array_rand($hand);
    $pcHand = $hand[$key];

    if ($player == $pcHand) {
        $result ='あいこ';
    } elseif ($player == 'グー' && $pcHand == 'チョキ') {
        $result = '勝ち';
    } elseif ($player == 'チョキ' && $pcHand == 'パー') {
        $result = '勝ち';
    } elseif ($player == 'パー' && $pcHand == 'グー') {
        $result = '勝ち';
    } else {
        $result = '負け';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>じゃんけん</title>
</head>
<body>
        何を出しますか？？
        <div class="form-box">
            <form action="index2.php" method="post">
                <label>
                    <input type="radio" title="player" name="player" value="グー" checked>グー
                </label>
                <label>
                    <input type="radio" title="player" name="player" value="チョキ">チョキ
                </label>
                <label>
                    <input type="radio" title="player" name="player" value="パー">パー
                </label>
                <button type="submit">勝負！</button>
            </form>

        結果は・・
        <div class="result-box">
    
            あなた：<?= $player ?><br>
            コンピューター：<?= $pcHand ?><br>
    
            <p class="result-word"><?= $result ?>！</p>

        </div>
</div>
</body>
</html>
