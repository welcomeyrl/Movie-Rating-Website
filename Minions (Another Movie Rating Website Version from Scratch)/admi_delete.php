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
$title=$_POST['moviename'];  
if(empty($title))
{
echo "<h1 style='text-align:center'>please input movie name</h1>";
}


$con=mysqli_connect("localhost","root","root","movie-test");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

$checkExist="select * from movies where title = '$title'";
$result = mysqli_query($con, $checkExist);
$num_rows = $result->num_rows;
if($num_rows==0)
{
	echo"<h1 style='text-align:center'>film not exist</h1>";
}
else{
$query="delete from movies where title='$title' ";
if (mysqli_query($con, $query)) {
    echo "<h1 style='text-align:center'>New record deleted successfully</h1>";
} 
}
	}

mysqli_close($con);
?> 
