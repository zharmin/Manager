<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>Restart WikiaBox</title>
 </head>
<body>

<?php
$user = $_SERVER['PHP_AUTH_USER'];

exec("sudo -u $user /usr/local/bin/chstop 2>&1");
//exec("sudo -u $user /usr/local/bin/chkill 2>&1", $output);
echo "Stopped successfully"."<br />";
//print_r($output);  // to see the respond to your command
?>

</body>
</html>
