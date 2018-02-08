<?php
     if(!isset($_POST['host']) || $_POST['host']=="") {
	die("You did not specify any host.</br><a href=\"index.html\">Back</a>");
     }
     $host = $_POST['host'];
     $port = $_POST['port'];
     if(!is_numeric($port) && !$port == "") {
	die("You've specified an invalid port number.</br><a href=\"index.html\">Back</a>");
     }
     if (strlen($host) > 100) {
	die("You've specified a host that exceeds the allowed length of 100 characters.</br><a href=\"index.html\">Back</a>");
     }
     if(!checkdnsrr(idn_to_ascii($host), 'A')) {
	die("Host: \"$host\" is not resolvable. Maybe you've misspelled it?</br><a href=\"index.html\">Back</a>");
     }
     if($port > 65535 || $port < 0 && !$port == "") {
        die("You've specified an invalid port number.</br><a href=\"index.html\">Back</a>");
     }
     echo "Results => ";
     $output = passthru("quicver $host $port");
     echo $output;
     echo "</br>";
     echo "<a href=\"index.html\">Back</a>";

?>
