<html>
<head>
    <title>Listing 6.9</title>
</head>
<body>
<?php
$num_of_calls = 0;
function andAnotherThing( $txt )
{
    global $num_of_calls;
    $num_of_calls++;
    print "<h1>$num_of_calls. $txt</h1>";
}
andAnotherThing("Widgets");
print("we build a fine range of widgets<p>")
andAnotherThing("Doodads");
print("finest in the world<p>");
?>
</body>
</html>
