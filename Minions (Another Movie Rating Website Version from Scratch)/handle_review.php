<?php
//Get the rating and comments from movie page
//$username = 'jmurphy9';
$username = $_COOKIE["username"];
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
$movie_id=$_COOKIE[$cookie_name];
//$movie_id = 15;
$rating = $_POST["rating"];
$user_review = $_POST["review_text"];
$num_reviews = 0;
$user_id = 0;

//whether the user inputed nothing

$user = 'root';
$password = 'root';
$db = 'movie-test';
$host = 'localhost';
$con = mysqli_connect($host,$user,$password,$db);
if (!$con) {
    die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,$db);
//query for number of reviews exsisted
$sql_reviewcount = 'SELECT COUNT(*) FROM reviews';
$result = mysqli_query($con,$sql_reviewcount);
while($row = mysqli_fetch_array($result)) {
	$num_reviews = $row["COUNT(*)"];
	$num_reviews = $num_reviews+1;
}
//query for user_id base on the given username cookie
$sql_userId = 'SELECT * FROM users,reviews WHERE users.user_id = reviews.user_id AND user_name = "'.$username.'"';
$userId_result = mysqli_query($con,$sql_userId);
while($row_1 = mysqli_fetch_array($userId_result)) {
	$user_id = $row_1["user_id"];
}
$sql='INSERT INTO reviews (review_id, movie_id, user_id, comments, score) VALUES ('.$num_reviews.', '.$movie_id.', '.$user_id.', "'.$user_review.'", '.$rating.')';
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
echo '<br>';
echo '<a href="movie.php?id='.$movie_id.'">Click here to return to previous page</a>';
?>