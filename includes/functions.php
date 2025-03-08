<?php
function getDomain($email) {
    $parts = explode('@', $email);
    return $parts[1] ?? '';
}
?>
