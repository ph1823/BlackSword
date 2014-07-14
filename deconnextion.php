<?php
ob_start();

session_start();
/* Demarage de la session  */
include('include/config.php');
/* Deconnection */
session_destroy();
/* Redirection sur index.php */
header('Location: index.php');

ob_end_flush();
?>