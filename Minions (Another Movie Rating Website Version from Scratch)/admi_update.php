<?php
// Create connection
function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
$item=intval($_POST['item']);
$inputName=$_POST['update-moviename'];
$con=mysqli_connect("localhost","root","root","movie-test");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

$checkExist="select * from movies where title = '$inputName'";
$result = mysqli_query($con, $checkExist);
$num_rows = $result->num_rows;
if($num_rows==0)
{
	echo "<h1 style='text-align:center'>film not exist</h1>";
}
else {
if($item==1)
{
  $title=$_POST['update-title']; 
  $query="update movies set title='$title' where title='$inputName'";
if (mysqli_query($con, $query)) {
    echo "<h1 style='text-align:center'>New record updated successfully</h1>";
} 
}
else if($item==2)
{
$director=$_POST['update-director'];
 $query="update movies set director='$director' where title='$inputName'";
if (mysqli_query($con, $query)) {
     echo "<h1 style='text-align:center'>New record updated successfully</h1>";
} 
}
else if($item==3)
{
$actor=$_POST['update-director'];
 $query="update movies set actor='$actor' where title='$inputName'";
if (mysqli_query($con, $query)) {
     echo "<h1 style='text-align:center'>New record updated successfully</h1>";
} 
}
else if($item==5)
{
$runtime=intval($_POST['update-runtime']);
 $query="update movies set runtime='$runtime' where title='$inputName'";
if (mysqli_query($con, $query)) {
   echo "<h1 style='text-align:center'>New record updated successfully</h1>";
} 
}
else if($item==6)
{
$year=intval($_POST['update-year']);
 $query="update movies set production_year='$year' where title='$inputName'";
if (mysqli_query($con, $query)) {
     echo "<h1 style='text-align:center'>New record updated successfully</h1>";
} 
}
else if($item==7)
{
$genres=implode(",", $_POST['upgenres']);
 $query="update movies set genres='$genres' where title='$inputName'";
if (mysqli_query($con, $query)) {
     echo "<h1 style='text-align:center'>New record updated successfully</h1>";
} 	
}
else if($item==9)
{
	$trailer=$_POST['update-title'];
	 $query="update movies set trailer_name='$trailer' where title='$inputName'";
if (mysqli_query($con, $query)) {
     echo "<h1 style='text-align:center'>New record updated successfully</h1>";
} 	
}
else if($item==10)
{
	$image=$_POST['update-title'];
	 $query="update movies set image_name='$image' where title='$inputName'";
if (mysqli_query($con, $query)) {
    echo "<h1 style='text-align:center'>New record updated successfully</h1>";
} 	
}
else if($item==11)
{
$language=$_POST['update-director'];
	 $query="update movies set movie_language='$language' where title='$inputName'";
if (mysqli_query($con, $query)) {
    echo "<h1 style='text-align:center'>New record updated successfully</h1>";
} 		
}
else if($item==12)
{
	$storyline=$_POST['update-title'];
		 $query="update movies set storyline='$storyline' where title='$inputName'";
if (mysqli_query($con, $query)) {
     echo "<h1 style='text-align:center'>New record updated successfully</h1>";
} 
}
}


mysqli_close($con);
}	
?> 
