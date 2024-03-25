<?php
    require_once 'classes/JankenGame.php';

    $user_hand = '';
    $pc_hand = '';
    $result = '';

    if (!empty($_POST['user_hand'])) {
        $user_hand = $_POST['user_hand'];
        $janken_game = new JankenGame();
        $pc_hand = $janken_game->getHand();
        $result = $janken_game->janken_game($user_hand);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <h1>じゃんけんゲーム</h1>
    <?php if (!empty($result)) {
        echo 'あなたの手：' . $_POST['user_hand'] . '<br>';
        echo 'PCの手:' . $pc_hand . '<br>';
        echo '結果'. $result . '<br>';
    }
    ?>

    <form method="post">
        <label><input type="radio" name="user_hand" value="グー">グー</label>
        <label><input type="radio" name="user_hand" value="チョキ">チョキ</label>
        <label><input type="radio" name="user_hand" value="パー">パー</label>
        <input type="submit" value="勝負">
    </form>

</body>
</html>