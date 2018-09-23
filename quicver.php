<?php
     //If POST var host is not set or empty, die.
     if(!isset($_POST['host']) || $_POST['host']=="") {
	die("You did not specify any host.</br><a href=\"index.html\">Back</a>");
     }
     //Vars are being parsed into host and port.
     $host = $_POST['host'];
     $port = $_POST['port'];
     //If var port isn't numeric and is not empty (because empty means default port 443), die.
     if(!is_numeric($port) && !$port == "") {
	die("You've specified an invalid port number.</br><a href=\"index.html\">Back</a>");
     }
     //If var host exceeds 100 characters, die. (Prevention against max body transgressing)
     if (strlen($host) > 100) {
	die("You've specified a host that exceeds the allowed length of 100 characters.</br><a href=\"index.html\">Back</a>");
     }
     //Check, if an A record exists for the specified host. If there's none, die.
     if(!checkdnsrr(idn_to_ascii($host), 'A')) {
	die("Host: \"$host\" is not resolvable. Maybe you've misspelled it?</br><a href=\"index.html\">Back</a>");
     }
     //If the port number exceeds or falls below valid ones, die.
     if($port > 65535 || $port < 1 && !$port == "") {
        die("You've specified an invalid port number.</br><a href=\"index.html\">Back</a>");
     }
     //Pass quicver shell command and return output of "pretty-printed" aha.
     passthru("quicver $host $port | aha --title Results: ");
     echo ("<a href=\"index.html\">Back</a>");
?>
