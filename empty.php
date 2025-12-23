<?php
$input = fopen('php://input', 'rb');
while (!feof($input)) fread($input, 8192);
fclose($input);
echo 'OK';
?>
