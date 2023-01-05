<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>unexpected occurrences are known as exceptions.</h1>
    <h1>Some programming languages have the capability to react gracefully to an exception rather than cause the application to grind to a halt, a behavior known as exception handling. When an error is detected, the code emits, or throws, an exception. </h1>
    <h1>In turn, the associated exception-handling code takes ownership of the issue, or catches the exception.</h1>
    <p>
    Almost all languages have borrowed from the C++ syntax, known as try/catch. 
Here's a simple pseudocode example:
<pre>
try {
 perform some task
 if something goes wrong
 throw exception("Something bad happened")
// Catch the thrown exception
} catch(exception) {
 Execute exception-specific code
}
</pre>
    </p>
<p>
The default exception constructor is called with no parameters. For example, you can invoke the exception class like so:<br>
<code>
throw new Exception();
</code> <br>
For instance, save the following line of code to a PHP-enabled file and execute it within your browser:<br>
<code>
throw new Exception("Something bad just happened")
</code>
</p>
</body>
</html>