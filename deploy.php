<?php

// $secret = 'your-secret-key';
// $signature = 'sha1=' . hash_hmac('sha1', file_get_contents('php://input'), $secret);
// if ($_SERVER['HTTP_X_HUB_SIGNATURE'] !== $signature) {
//     http_response_code(403);
//     die('Unauthorized');
// }
$output = shell_exec('cd public_html/goapi.qordinate.com/tes_serv && git pull origin main 2>&1');
echo "<pre>$output</pre>";
