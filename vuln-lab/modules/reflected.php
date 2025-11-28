<?php include "../csp.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Reflected XSS Test</title>
<link rel="stylesheet" href="../styles.css">
</head>

<body>
<?php include "../navbar.php"; ?>

<div class="container">
<h2>Reflected XSS Test</h2>

<form>
    <input name="q" placeholder="Enter XSS payload">
    <button>Submit</button>
</form>

<div class="output-box">
<?= $_GET['q'] ?? "" ?>
</div>

<p>Example: &lt;img src=x onerror=alert(1)&gt;</p>
</div>

</body>
</html>
