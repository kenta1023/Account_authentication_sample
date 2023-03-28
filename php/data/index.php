<?php
session_start();
if (isset($_SESSION['id'])) {
    $name = $_SESSION['name'];
} else {
    http_response_code(301);
    header('Location: login.php');
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>home</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <section class="main">
        <h1>ようこそ---<strong><?php echo $name; ?></strong>---</h1>
        <h2>今回の実演内容</h2>
        <p>
            簡単なパスワードに対するブルートフォースアタック(総当たり)<br>
            短い、数字のみなどは総当たりによる攻撃に対してとても弱いです。
            また長いパスワードであっても、よく使われるパスワード（password12345）などは辞書型攻撃
            に対して弱いです。複雑で長いパスワードをサイトごとに代えながら使うことを大切にしましょう。
        </p>
        <button type="button" onclick="location.href='logout.php'">ログアウト</button>
    </section>

</body>

</html>