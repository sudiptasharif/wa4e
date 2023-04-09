<?php
include_once "../util/util.php";

echo a("Back", "index.html");
echo h1("Expressions");

echo h3("Aggressive Implicit Type Conversion");
$note = '"15" + 27 will evaluate to 42. Because PHP will aggressively cast'
        . ' the "15" to 15. Since you typed it that\'s what the PHP compiler thinks'
        . ' you wanted to do!';
l($note);
l("");
$x = "15" + 27;
l('"15" + 27 = ' . $x);

$a = 'Hello ' . 'World!';
l($a);

$a = 'Hello ' . '28';
l($a);

//$animal = "bunny";
$country = "usa";

$result = $animal ?? $country;
l('$result = ' . $result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressions</title>
</head>
<body>
    
</body>
</html>