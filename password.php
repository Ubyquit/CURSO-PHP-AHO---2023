<?php
// See the password_hash() example to see where this came from.
$hash = '$2y$10$kil2Xp8FisGDgiT2E2tg5.YgUMgGGc6zfKmAjgRXA51M.p5Eh8DWC';

if (password_verify('1234567890', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>