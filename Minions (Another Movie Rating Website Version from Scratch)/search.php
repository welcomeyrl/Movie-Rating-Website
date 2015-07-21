<?php
// Create connection
$con=mysqli_connect("localhost","root","root","movie-test");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
$q=$_GET['q'];
$y=$_GET['y']; 
$z=intval($_GET['z']);

//mysqli_select_db($con,"csv_db");

//$result = mysqli_query($con,"SELECT * FROM tbl_name where year='".$varSelectYear."'" );


$query="Select * from movies ";
$query1="";
$query2="";
$query3="";
if($q!="all"){
	$query1=" genres like '%$q%' ";
}
if($y !="all")
{
    $query2=" movie_language like '%$y%' ";	
}
switch($z)
{
case 2010:
	$query3=" production_year > 2010 ";
	break;
case 2000:
    $query3=" production_year between 2000 and 2010 ";
    break;
case 1990:
    $query3=" production_year between 1990 and 2000 ";
    break;
case 1980:
     $query3=" production_year between 1980 and 1990 ";
    break;
default:
    break;
}

if($query1||$query2||$query3)
{
	$query=$query."where ";
}

if($query1)
{
	$query=$query.$query1;
}
if($query2 && $query1)
{
	$query=$query."and" .$query2;
}
else if($query2)
{
	$query=$query .$query2;
}
if($query3 &&($query1||$query2))
{
	$query=$query."and" .$query3;
}
else if($query3)
{
	$query=$query .$query3;
}
//echo "<p> the query is " .$query. "</p>";

$result = mysqli_query($con, $query);
echo "<ul style='list-style: none; position: relative; top: 30px;'>";
   
while($row = mysqli_fetch_array($result))
{
echo "  <li style='float: left;margin:0 20px 20px 0;'>";
echo	"<figure style='display: block;
  padding: 5px;
  font-family: 'Cherry Swash', cursive;
  font-size: 1em;
  text-align: center;'>";
 // echo $row[0];
  echo '<a href="movie.php?id='.$row[0].'"><img src="image_movie/'.$row[10].'" alt="missing" /></a>';
//echo    "<a href='movie.php?id='".$row[0]."''><img src=image_movie/".$row[10]." alt='missing' /></a>";
echo   "<figcaption>"  .$row[1]. "</figcaption>";
echo "</figure>";
echo "</li>";
/*	
echo "<p> the query is " .$row[1]."</p>";
echo " <li>";
echo " <a href='/video/av2183262/' target='_blank' class='tooltip' title= ".$row[1].">";
echo "<span title='More'>";
echo "<img src =" .$row[10].">";
echo "</span>";
echo "</a>";
echo "</li>";
*/
}	
echo "</ul>";

/*
$resultf = mysqli_query($con,"SELECT * FROM babynames where year=$q and gender = 'F' ");
echo"<table border='1' >";
echo"<tr align='center' width='100%'>";
echo"<td width='42%' bgcolor='#eeeeee'>Name</td>";
echo"<td  bgcolor='#99ccff'>Ranking</td>";
echo"<td  bgcolor='pink'>Gender</td>";
echo"</tr>";  
       
while($row = mysqli_fetch_array($resultf))
{
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
//echo "<td>" . $row[1] . "</td>";
echo "<td>" . $row[2] . "</td>";
echo "<td>" . $row[3] . "</td>";
echo "</tr>";
}	
echo" </table>";
echo"|$|";
$resultm = mysqli_query($con,"SELECT * FROM babynames where year=$q and gender='M' ");
echo"<table border='1' >";
echo"<tr align='center' width='100%'>";
echo"<td width='42%' bgcolor='#eeeeee'>Name</td>";
echo"<td  bgcolor='#99ccff'>Ranking</td>";
echo"<td  bgcolor='pink'>Gender</td>";
echo"</tr>";  
       
while($row = mysqli_fetch_array($resultm))
{
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
//echo "<td>" . $row[1] . "</td>";
echo "<td>" . $row[2] . "</td>";
echo "<td>" . $row[3] . "</td>";
echo "</tr>";
}	
echo" </table>";	

*/
	
mysqli_close($con);
?> 
