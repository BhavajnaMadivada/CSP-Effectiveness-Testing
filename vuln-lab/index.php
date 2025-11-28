<?php include "csp.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>CSP Testing Lab</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include "navbar.php"; ?>

<div class="container">
<h1>CSP Testing Lab</h1>

<p>Welcome to the modern CSP Testing Lab.  
Use the navigation menu to test:</p>

<ul>
    <li>Reflected XSS</li>
    <li>Stored XSS</li>
    <li>DOM XSS</li>
</ul>

<h2 id="csp">Current CSP Mode:</h2>

<div class="output-box">
<?php echo ($CSP_MODE === "strict") ? "STRICT (CSP Enabled)" : "NONE (No CSP Applied)"; ?>
</div>

<p>To change CSP mode, edit <b>csp.php</b> and switch:</p>
<pre>$CSP_MODE = "none";  
$CSP_MODE = "strict";</pre>

</div>
</body>
</html>
