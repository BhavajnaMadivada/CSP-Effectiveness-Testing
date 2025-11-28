<?php include "../csp.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Home XSS</title>
<link rel="stylesheet" href="../styles.css">
</head>

<body>
<?php include "../navbar.php"; ?>

<div class="container">
<h2>Home</h2>

<form>
    <input name="x" placeholder="Enter XSS payload">
    <button>Submit</button>
</form>

<div class="output-box">
<?= $_GET['x'] ?? "" ?>
</div>

<p>Try: &lt;script&gt;alert(1)&lt;/script&gt;</p>
</div>
</body>
</html>
