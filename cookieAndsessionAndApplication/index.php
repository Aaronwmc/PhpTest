<?php
setcookie('cuser','cookieNameOne',time()+30);
setrawcookie('rcuser','rawcookieNameOne',time()+30);

session_start();
$_SESSION['suser'] = 'sessionNameOne';
$_SESSION['num'] = 0;