<?php

    session_start();
    if(!isset($_SESSION['notes'])){
        $_SESSION['notes'] = [];
    }

?>