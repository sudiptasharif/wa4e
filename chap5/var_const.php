<?php
include_once "../util/util.php";

echo a("Back", "index.html");
echo h1("Vriables and Constants");
define('y', '100');
// y = 100;
$x = 2;
$z = $x + 5;
echo pre($z);
echo pre(y);

echo h1("Example of String with newlines and space in them");
$s = "This is a string. This is a string
This is a string.


Test.
Test.
This is all part of string.";

echo pre($s);
echo pre($s);

echo h1("Double Quotes Example:");
$s = "Surrounded by double quotes: varirable will expand '$x' = $x";
echo pre($s);

echo h1("Single Quotes Example:");
$s = 'Surrounded by single quotes: varirable will not expand "$x" = $x';
echo pre($s);
$s = 'This will not expand:\n a newline';
echo pre($s);
$s = 'This will not expand:\r a newline';
echo pre($s);
$s = 'This will not expand:\t a newline';
echo pre($s);
$s = 'This will not expand:\e a newline';
echo pre($s);

echo h1("Single Quote | Double Quote Conclusion");
echo pre("Use single quote by default, and use double quote 
with the intension of exapanding variables or special chars.");

echo h1("echo");
$notes = [];
$notes[] = "echo is a language construct. Can be treated like a function with one paramenter.";
$notes[] = "Without parentheses, it accepts multiple parameters";
$notes[] = "echo came to PHP from shell";

echo ul($notes);
echo h2("Example");
echo "Test with echo", br();
echo "Test test";
echo br();
echo "apple", "orange", "mango", "banana", "cherry";
echo br();
echo ("This is a test with parentheses");

echo h1("print");
$notes = [];
$notes[] = "print is a function -  only one parameter";
$notes[] = "parentheses are optional, so without it, it can look like a language construct";
$notes[] = "print came to php from pearl";
echo ul($notes);

l("This is a super test");
l("This is another super test");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Constants</title>
</head>
<body>
</body>
</html>
