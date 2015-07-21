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
$title=$_POST['title'];  
$director=$_POST['director'];
$actor=$_POST['actor'];
$rating=0;
$runtime=intval($_POST['runtime']);
$year=intval($_POST['year']);
$genres=implode(",", $_POST['genres']);
$trailer=$_POST['trailer'];
$image=$_POST['image'];
$language=$_POST['language'];
$storyline=$_POST['storyline'];
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
$query="insert into movies (title,director,actor,rating,runtime,production_year,genres,trailer_name,image_name,movie_language,storyline) values ('$title','$director','$actor',$rating,$runtime,$year,'$genres','$trailer','$image','$language','$storyline')";
if (mysqli_query($con, $query)) {
    echo "<h1 style='text-align:center'>New record created successfully</h1>";
}
}
else{
 	echo "<h1 style='text-align:center'>film already exist</h1>";
 }  

}	

mysqli_close($con);
?> 
