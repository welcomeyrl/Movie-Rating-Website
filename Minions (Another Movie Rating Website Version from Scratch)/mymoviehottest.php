<?php
$con=mysqli_connect("localhost","root","root","movie-test");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
$query="Select * from movies order by rating desc limit 10";
$result = mysqli_query($con, $query);
$number=1;

while($row = mysqli_fetch_array($result))
{
echo " <li>";
echo '<a href="movie.php?id='.$row[0].'">'.$number. ".[".$row[7]."] ".$row[1].'</a>';
echo "</li>";
$number=$number+1;
}	


mysqli_close($con);
?>