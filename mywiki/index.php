<?php
$content = file_get_contents('content.txt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWiki - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>MyWiki</h1>
    <a href="edit.php">Edit Content</a>
    <div id="content">
        <?php echo $content; ?>
    </div>
</body>
</html>
