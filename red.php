<?php
require 'IP2Location.php';
 
$loc = new IP2Location('databases/IP-COUNTRY.BIN', IP2Location::FILE_IO);
$record = $loc->lookup($_SERVER['REMOTE_ADDR'], IP2Location::ALL);
 
if($record == 'EG') {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: https://viral481.com/srv.html?id=5484372&pub=1247586');
    exit;
}
 
if($record == 'AE') {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: https://viral481.com/srv.html?id=5494691&pub=1247586');
    exit;
}
 
if($record == 'IQ') {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: https://viral481.com/srv.html?id=5490491&pub=1247586');
    exit;
}
else {
  echo "You Are Not Allowed To See This Page";
}
?>
