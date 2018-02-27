<?php
    session_start();
    $_SESSION['branch'] = null;
    session_destroy();
    header("Location: ./index.php");
?>