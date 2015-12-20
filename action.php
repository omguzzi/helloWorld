<?php
// set the expiration date to one hour ago
setcookie('loggedin', null, time()-86400, '/', 'uzzi.dev'); 
header('Location: /')
?>