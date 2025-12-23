<?php
ini_set('zlib.output_compression', 'Off');
$size = isset($_GET['ckSize']) ? intval($_GET['ckSize']) * 1024 * 1024 : 25 * 1024 * 1024;
header('Content-Type: application/octet-stream');
header('Content-Length: ' . $size);
$chunk = 1024 * 1024;
while ($size > 0) {
    $bytes = min($chunk, $size);
    echo str_repeat("\0", $bytes); // or random_bytes($bytes) for true random
    flush();
    $size -= $bytes;
}
?>
