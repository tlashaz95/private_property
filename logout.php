<?php
session_start();
if(!isset($_SESSION['upadmin'])) 
{
    echo "no session - logout";
    echo '<script type="text/javascript">window.location.href="index.php";</script>';
}
else
{
    unset($_SESSION['upadmin']);
    unset($_SESSION['auth']);
    //session_destroy();
    echo '<script type="text/javascript">window.location.href="index.php";</script>';
}
?>