<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>Disk</title>
 </head>
<body>

<?php
$serverIP = $_SERVER["SERVER_ADDR"];
$load = sys_getloadavg();
$host = gethostname();
$user = $_SERVER['PHP_AUTH_USER'];

exec("sudo -u $user /usr/local/bin/userused 2>&1", $used);
exec("sudo -u $user /usr/local/bin/usertotal 2>&1", $total);
$dp = sprintf('%.1f',($used[0] / $total[0]) * 100);

function size2Byte($bytes) {
    $units = array('KB', 'MB', 'GB', 'TB');
    $currUnit = '';
    while (count($units) > 0  &&  $bytes > 1024) {
        $currUnit = array_shift($units);
        $bytes /= 1024;
    }
    return ($bytes | 0) . $currUnit;
}

$du = size2Byte($used[0] *1024);
$dt = size2Byte($total[0] *1024);

exec("sudo -u $user /usr/local/bin/servicechk 2>&1", $servicestatus);
?>

</body>
</html>
