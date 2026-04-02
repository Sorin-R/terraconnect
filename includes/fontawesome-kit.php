<?php
$fontawesomeKitId = 'PASTE_YOUR_KIT_ID_HERE';
if ($fontawesomeKitId !== '' && $fontawesomeKitId !== 'PASTE_YOUR_KIT_ID_HERE') {
    echo '<script src="https://kit.fontawesome.com/' . htmlspecialchars($fontawesomeKitId, ENT_QUOTES, 'UTF-8') . '.js" crossorigin="anonymous"></script>';
}
?>
