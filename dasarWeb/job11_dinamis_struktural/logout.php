<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} else {
    session_destroy();
}
header('location: index.php');
?>