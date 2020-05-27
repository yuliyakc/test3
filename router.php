<?php
/*echo "<pre>";
print_r($_SERVER);
echo "</pre>";
*/
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} elseif (preg_match('/^\/$/', $_SERVER["REQUEST_URI"])) {
    include_once 'index.php';
} else {
    include_once 'server.php';
}