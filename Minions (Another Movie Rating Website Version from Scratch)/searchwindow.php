<?php
$con=mysqli_connect("localhost","root","root","movie-test");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if(empty($_GET['x'])){
	$message="please type in the name of movie";
   echo "<script type='text/javascript'>alert('$message');</script>";
}
else{
$q=test_input($_GET['x']);
}
$query="Select * from movies where title like '%$q%'";
echo "<ul style='list-style: none; position: relative; top: 30px;'>";
$result = mysqli_query($con,$query );
while($row = mysqli_fetch_array($result))
{
echo " <li style='float: left;margin:0 20px 20px 0;'>";
echo	"<figure style='display: block;
  padding: 5px;
  font-family: 'Cherry Swash', cursive;
  font-size: 1em;
  text-align: center;'>";
echo '<a href="movie.php?id='.$row[0].'"><img src="image_movie/'.$row[10].'" alt="missing" /></a>';
echo   "<figcaption>"  .$row[1]. "</figcaption>";
echo "</figure>";
echo "</li>";
}	
echo "</ul>";

mysqli_close($con);	
	
?>