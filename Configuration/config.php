<?php
    //database type ; hote and database name
    $data_source_name='mysql:host=localhost;dbname=banque'; 
    $user_name = 'root';
    $password = 'root';

    $db = new PDO($data_source_name, $user_name, $password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);