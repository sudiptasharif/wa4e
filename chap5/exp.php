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

echo h3("String Concatenation");
$a = 'Hello ' . 'World!';
l($a);


$a = 'Hello ' . 24;
l($a);

$a = 'Hello ' . ['testKey' => 'testValue'];
l($a);

$json = '{"foo":"bar"}';
$a = 'Hello ' . $json;
l($a);

echo  h3("Curly Braces Good Substitution for Concatenation");
echo p("Curly braces serve good substitution for concatenation, and they are quicker to type and code looks cleaner. Remember to use double quotes (\" \") as their content is parsed by php, because in single quotes (' ') you'll get literal name of variable provided");

l("This works");
$a = '12345';
l('$a = \'12345\'');
l('"abcd{$a}efgh" = ' . "abcd{$a}efgh (string inside double quotes is parsed)");
l("This does not work");
l('\'abcd{$a}efgh\' = ' . 'abcd{$a}efgh (string inside single quotes is not parsed)');

echo h3('Order of precedence: dot operator');
l('dot operator(.) has the same precedence as + and -');
$var = 3;
echo "Result: ".$var+3;

echo  h3("Null Coalescing Operator");
//$animal = "bunny";
$country = "usa";
$result = $animal ?? $country;
l('$result = ' . $result);

echo h3("Side-Effect Assingnment");
echo "These are pure contractions. Use them sparingly";

echo br();
$out = "Hello";
$out = $out . " ";
$out .= "World!";
$out .= br();
echo $out;    

$count = 0;
$count += 1;
echo "Count: $count" . br(); 

echo h3("Casting");
l('$a = 56');
l('$b = 12');
$a = 56;
$b = 12;
$c = $a / $b;
l('$c = $a / $b');
l("C: $c");

l('"100" + 36.25 + true');
$d = "100" + 36.25 + true;
l("D: $d");
l("D2: " . (string)$d);

$e = (int) 9.9 - 1;
l("E: $e");

//$f = "sam" + 25;
//l("F: $f");

$g = "sam" . 25;
l("G: $g");

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