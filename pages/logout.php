<?php

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}

// Redirect to home page
echo "<script>window.location.replace(\"index.php?page=home\");</script>";