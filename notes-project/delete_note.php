<?php

    require_once 'includes/session.php';
    require_once 'includes/functions.php';

    if($_GET['id']){
        delete($_GET['id']);
    }

    header("Location: notes.php");
    exit;
?>