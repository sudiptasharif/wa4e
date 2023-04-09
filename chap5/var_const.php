<?php
include_once "../util/util.php";

h1("Vriables and Constants");
p(a("Back", "index.html"));
define('y', '100');
// y = 100;
$x = 2;
$z = $x + 5;
pre($z);
pre(y);

h1("Example of String with newlines and space in them");
$s = "This is a string. This is a string
This is a string.


Test.
Test.
This is all part of string.";

pre($s);
pre($s);

h1("Double Quotes Example:");
$s = "Surrounded by double quotes: varirable will expand '$x' = $x";
pre($s);

h1("Single Quotes Example:");
$s = 'Surrounded by single quotes: varirable will not expand "$x" = $x';
pre($s);
$s = 'This will not expand:\n a newline';
pre($s);
$s = 'This will not expand:\r a newline';
pre($s);
$s = 'This will not expand:\t a newline';
pre($s);
$s = 'This will not expand:\e a newline';
pre($s);

h1("Single Quote | Double Quote Conclusion");
pre("Use single quote by default, and use double quote 
with the intension of exapanding variables or special chars.");

h1("echo");
$notes = [];
$notes[] = "echo is a language construct. Can be treated like a function with one paramenter.";
$notes[] = "Without parentheses, it accepts multiple parameters";
$notes[] = "echo came to PHP from shell";

ul($notes);
h2("Example");
echo "Test with echo", br();
echo "Test test";
echo br();
echo "apple", "orange", "mango", "banana", "cherry";
echo br();
echo ("This is a test with parentheses");

h1("print");
$notes = [];
$notes[] = "print is a function -  only one parameter";
$notes[] = "parentheses are optional, so without it, it can look like a language construct";
$notes[] = "print came to php from pearl";
ul($notes);

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
