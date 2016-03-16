<?php
    $db = new PDO('mysql:host=http://192.168.2.29/; dbname=devgo; charset=utf8', "root", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>