<?php
/**
 * using mysqli_connect for database connection
 */
 
try { 
    $pdo_conn = new PDO('mysql:host=localhost;dbname=simpusda_db', 'root', '',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>