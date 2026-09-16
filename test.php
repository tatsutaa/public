<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPテストページ</title>
</head>
<body>
    <h1>HTMLの骨組みです</h1>
    
    <p>
        <!-- ここからPHPの命令 -->
        <?php 
            echo "ここはPHPが自動で書き換えた文字です。現在時刻：" . date('Y-m-d H:i:s'); 
        ?>
    </p>
</body>
</html>
