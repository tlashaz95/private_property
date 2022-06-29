<?php
session_start();
if(!isset($_SESSION['upadmin'], $_SESSION['auth'])) 
{
    echo "no session";
    echo '<script type="text/javascript">window.location.href="index.php";</script>';
}
?>