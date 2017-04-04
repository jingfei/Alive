<?php
session_start();
session_unset();
$_SESSION = [];
echo '<script>location.href="../";</script>';
?>
