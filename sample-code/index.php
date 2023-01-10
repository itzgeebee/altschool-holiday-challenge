<!DOCTYPE html>
<html>
<body>

<h1> My job is to tell you which server your response is coming from! </h1>

<h2>
<?php
$ip_server = $_SERVER['SERVER_ADDR'];
echo "The response is coming from the server with the hostname:" .gethostname();
echo  " and Server IP Address is: $ip_server";
?>
</h2>

</body>
</html>
