<?php include "../csp.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>DOM XSS Test</title>
<link rel="stylesheet" href="../styles.css">
</head>

<body>
<?php include "../navbar.php"; ?>

<div class="container">
<h2>DOM XSS Test</h2>

<div id="output" class="output-box">Waiting for input...</div>

<script>
    let msg = new URLSearchParams(location.search).get('msg');
    if (msg) {
        document.getElementById("output").innerHTML = msg;
    }
</script>

<p>Try in URL: ?msg=&lt;img src=x onerror=alert(123)&gt;</p>
</div>

</body>
</html>
