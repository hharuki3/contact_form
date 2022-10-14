<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力画面</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="form">
    <form action="confirm.php" method="POST">
        <div class="form-item">
            <p class="form-item-label">
                <span class="form-item-label-required">必須</span>指名
            </p>
            <input type="text" name="name" value="<?php echo $_SESSION['contact']['name']; ?>" placeholder="例）山田太郎" required>
        </div>
        <div class="form-item">
            <p class="form-item-label">
                <span class="form-item-label-required">必須</span>メールアドレス
            </p>
            <input type="text" name="mail" value="<?php echo $_SESSION['contact']['mail']; ?>" placeholder="例）example@gmail.com" required>
        </div>
        <div class="form-item">
            <p class="form-item-label-msg"><div class="form-item-label-required">必須</div>お問合せ内容</p>
            <textarea name="message" class="form-item-textarea" required><?php print($_SESSION['contact']['message']); ?></textarea>
        </div>
        <input type="submit" value="送信" name="confirm" class="submit">
    </form>
</body>
</html>