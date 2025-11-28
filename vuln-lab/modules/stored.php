<?php
include "../csp.php";

$file = "../data/comments.txt";

if ($_POST) {
    file_put_contents($file, $_POST['comment']."\n", FILE_APPEND);
}

$comments = file($file);
?>
<!DOCTYPE html>
<html>
<head>
<title>Stored XSS Test</title>
<link rel="stylesheet" href="../styles.css">
</head>

<body>
<?php include "../navbar.php"; ?>

<div class="container">
<h2>Stored XSS Test</h2>

<form method="POST">
<textarea name="comment" placeholder="Write a comment..."></textarea>
<button>Submit</button>
</form>

<h3>Comments:</h3>
<?php foreach ($comments as $c): ?>
<div class="comment-box"><?= $c ?></div>
<?php endforeach; ?>

</div>
</body>
</html>
