<?php

// include database connection file
include_once("config.php");
 
// Delete buku row from table based on given id
$stmt=$pdo_conn->prepare("DELETE from m_buku WHERE id=" ."'" . $_GET['id'] . "'");
$stmt->execute();
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location: databuku.php");
?>