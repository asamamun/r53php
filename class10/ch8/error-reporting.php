<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Error and Exception Handling</h1>
    <ul>
        <li>Configuration directives</li>
        <li>Error logging</li>
        <li>Exception handling</li>
    </ul>
    <h3>error_reporting : The error_reporting directive determines the reporting sensitivity level. Sixteen levels 
are available. php.ini file have many directive</h3>
<ul>
    <li>display_errors</li>
    <li>ini_set('display_errors', 0);</li>
    <li>error_reporting=E_ALL & ~E_DEPRECATED & ~E_STRICT</li>
    <li>ini_set('error_reporting', E_ALL);</li>
    <li>log_errors</li>
    <li>max_input_time</li>    
    <li>max_input_time=60</li>    
    <li>memory_limit=512M</li>    
    <li>memory_limit=512M</li>    
    <li>log_errors directive in php.ini</li>    
    <li>error_log directive</li>    
    <li>error_log="D:\xampp8110\error\php_error_log"</li>    
    <li>error_log="php_error_log"</li>    
    <li>error_log(Date("Y-m-d H:i:s a") . " : New user registered");</li>    
</ul>
</body>
</html>