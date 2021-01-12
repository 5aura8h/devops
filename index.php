<html>
<center>
<h1> Sandbox Web Server for Testing </h1>

<body style="background-color:powderblue;">

<pre>
<?php

print "\n";

$host = gethostname();
$b = '<h2 style="color:Tomato;">' . gethostbyname($host) . '</h2>';

$a = '<h2>' . "Container IP: " . '</h2>';

echo $a.$b; 


?>
</pre>

</center>
</body>
</html>

