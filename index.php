<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>

</head>
<body>

<?php
// cookie arguments: name, value, expire, path, domain, security

// A cookie mus be set at the top of the document

// if you dont't include this expiry date, this cookie will only be stored for this current session.
$time = time() + 86400 * 30; // this cookie will be stored on the client's computer for 30 days 

setcookie("name", "myCookie", $time);

print_r($_COOKIE);

echo "<br><br>";

echo $_COOKIE["name"];
 
?>
    
</body>
</html>