<?php
// SWITCH MODES HERE:

$CSP_MODE = "none";
// $CSP_MODE = "strict";  // <- enable for strict CSP testing


if ($CSP_MODE === "strict") {
    // header("Content-Security-Policy: default-src 'self'; script-src 'self';style-src 'self'; img-src 'self'; connect-src 'self'; object-src 'none'; frame-ancestors 'none'; base-uri 'self'; form-action 'self';");
    header("Content-Security-Policy: script-src 'self' https"); 
    // header("frame-ancestors 'self' https://example.com default-src 'none'");
    // header("Content-Security-Policy: frame-ancestors DENY");
    // header("Content-Security-Policy: script-src sha512-BASE64HASH");
}
?>
