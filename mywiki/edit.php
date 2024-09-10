<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];
    file_put_contents('content.txt', $content);
    header('Location: index.php');
    exit();
}

$content = file_get_contents('content.txt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - MyWiki</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>
</head>
<body>
    <h1>Edit Content</h1>
    <form method="POST">
        <textarea id="summernote" name="content"><?php echo htmlspecialchars($content); ?></textarea>
        <br>
        <button type="submit">Save</button>
    </form>
    <a href="index.php">Back to Home</a>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300
            });
        });
    </script>
</body>
</html>
