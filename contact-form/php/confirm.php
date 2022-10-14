<?php
session_start();

if(isset($_POST['confirm']) && !empty($_POST['confirm'])){
    $_SESSION['contact'] = [
        'name' => $_POST['name'],
        'mail' => $_POST['mail'],
        'message' => $_POST['message']
    ];
}
// var_dump($_POST['confirm']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="form">
    <form action="complete.php" method="POST">
        <div class="form-item">
            <p class="form-item-label">指名</p>
            <?php echo $_SESSION['contact']['name']; ?>
        </div>
        <div class="form-item">
            <p class="form-item-label">メールアドレス</p>
            <?php echo $_SESSION['contact']['mail']; ?>
        </div>
        <div class="form-item">
            <p class="form-item-label-msg">お問合せ内容</p>
            <div class="form-item-textarea">
                <?php echo $_SESSION['contact']['message'];?>
            </div>
        </div>
        <input type="submit" value="送信" name="confirm" class="submit">
    </form>
    <a href="input.php">戻る</a>
</body>
</html>