<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form value submission using post method</title>
</head>
<body>
<form action="subscribe.php" method="post">
<p>
Email address:<br />
<input type="text" name="email" size="20" maxlength="50" value="" />
</p>
<p>
Password:<br />
<input type="password" name="pswd" size="20" maxlength="15" value="" />
</p>
<p>
<input type="submit" name="subscribe" value="subscribe!" />
</p>
</form>
</body>
</html>