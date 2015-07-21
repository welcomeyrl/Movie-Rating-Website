


<html>
<head>


</head>
<body>
<div> <a href = "mymovie.html">Go to the Main Page</a> </div>

<h1>Hello,<?php echo $_COOKIE["username"]?>! Welcome to your homepage!</h1>


<h2>You can review your recent 5 visited movies:</h2>


<?php


$his = $_COOKIE["history"];

$h = explode(",", $his);

echo "<a href = '".$h[0]."'>movie 1</a>";
echo "<br/>";
echo "<br/>";

echo "<a href = '".$h[1]."'>movie 2</a>";
echo "<br/>";
echo "<br/>";

echo "<a href = '".$h[2]."'>movie 3</a>";
echo "<br/>";
echo "<br/>";

echo "<a href = '".$h[3]."'>movie 4</a>";
echo "<br/>";
echo "<br/>";

echo "<a href = '".$h[4]."'>movie 5</a>";
echo "<br/>";
echo "<br/>";




?>



 






</body>





</html>




