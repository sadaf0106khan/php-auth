<?php 
session_unset();
session_destroy();
header('Location: login.php?Message='.urldecode('you are logged out.'));
?>