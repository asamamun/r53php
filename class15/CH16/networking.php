<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>DNS</h3>
    <p>The Domain Name System (DNS) is what allows you to use domain names (e.g., 
example.com) in place of the corresponding IP address, such as 192.0.34.166.</p>
    <h3> checkdnsrr() </h3>
    <p>The checkdnsrr() function checks for the existence of DNS records. Its prototype follows:
int checkdnsrr(string host [, string type])</p>
<?php
 $domain = "example.com";
 $recordexists = checkdnsrr($domain, "ANY");
 if ($recordexists)
 echo "The domain '$domain' has a DNS record!";
 else
 echo "The domain '$domain' does not appear to have a DNS record!";
?>
<hr>
<?php
$email = "ceo@example.com";
$domain = explode("@",$email);
$valid = checkdnsrr($domain[1], "MX");
if($valid)
echo "The domain has an MX record!";
else
echo "Cannot locate MX record for $domain[1]!";
?>
<h3>dns_get_record() </h3>
<p>The dns_get_record() function returns an array consisting of various DNS resource 
records pertinent to a specific domain. Its prototype follows:
array dns_get_record(string hostname [, int type [, array &authns, array 
&addtl]])</p>
<?php
 $result = dns_get_record("example.com");
 print_r($result);
?>
<h3>getmxrr()</h3>
<p>The getmxrr() function retrieves the MX records for the domain specified by hostname. </p>
<h3>getservbyname()</h3>
<p>The getservbyname() function returns the port number of a specified service.</p>
<?php
 echo "HTTP's default port number is: ".getservbyname("http", "tcp");
?>
<h3>getservbyport()</h3>
<p>The getservbyport() function returns the name of the service corresponding to the 
supplied port number.</p>
<?php
 echo "HTTP's default port number is: ".getservbyname("http", "tcp");
?>
<h3>mail()</h3>
<p>E-mail can be sent through a PHP script in amazingly easy fashion, using the mail()
function.</p>

</body>
</html>