<html>
<head>
    <title>Exercise 1</title>
</head>
<body>
<h1>Regular HTML section (outside &lt;?php ... ?&gt; tags)</h1>
<p>You can type regular HTML here and it will show up</p>

<h1>PHP section (inside &lt;?php ... ?&gt; tags)</h1>
<?php
//this is a php comment IN tags (will not appear)
//echo "This page was generated: " . date("M dS, Y");
//echo "This page was generated: " . date("M dS, Y") . "<hr/>";
//$d = date("M dS, Y");
//echo "This page was generated: " . $d . "<hr/>";
//$date = date("M dS, Y");
//echo "This page was generated: " . $date . "<hr/>";
$year = date("Y");
if($year % 4 == 0){
   $remaining = 366 - date ("z");
}else{
    $remaining = 365 - date("z");
}
echo "This are" .$remaining ."days left in the year";
echo "<br>"; //notice we must echo tags in php.

?>
</body>
</html>