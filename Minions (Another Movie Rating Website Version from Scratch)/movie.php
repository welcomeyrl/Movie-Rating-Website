

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">

<script src="movie.js" type="text/javascript"></script>
<link href="movie.css" type="text/css" rel="stylesheet" />
<!-- Imported stuff starts from here -->
<link href="star-rating/jquery.rating.css" type="text/css" rel="stylesheet" />
<script src="star-rating/jquery.rating.pack.js" type = "text/javascript"></script>
<title>Movie Page</title>
<script type="text/javascript" src="example.js"></script>
</head>
<body onload = "checkHistory()">
	
<?php

$id = $_GET["id"];
//set up cookie to store the movie_id
$cookie_name = "movie_id";
$cookie_value = $id;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$title = "title";
$director = "director";
$actor= "actor";
$rating = "rating";
$runtime = "runtime";
$production_year = "production_year";
$genres = "genres";
$language = "language";
$storyline = "storyline";
$imageName = 'imageName';
$trailerName = 'trailerName';
//Database Connection
$user = 'root';
$password = 'root';
$db = 'movie-test';
$host = 'localhost';
$con = mysqli_connect($host,$user,$password,$db);
if (!$con) {
    die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,$db);
$sql='SELECT * FROM movies WHERE movie_id = '.$id.'';

$result = mysqli_query($con,$sql);
echo $director;
if(!$result){
	echo "Result is empty";
}
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$director = $row['director'];
	$actor= $row['actor'];
	$rating = $row['rating'];
	$runtime = $row['runtime'];
	$production_year = $row['production_year'];
	$genres = $row['genres'];
	$language = $row['movie_language'];
	$storyline = $row['storyline'];
	$imageName = $row['image_name'];
	$trailerName = $row['trailer_name'];
//     echo "<tr>";
//     echo "<td>" . $row['FirstName'] . "</td>";
//     echo "<td>" . $row['LastName'] . "</td>";
//     echo "<td>" . $row['Age'] . "</td>";
//     echo "<td>" . $row['Hometown'] . "</td>";
//     echo "<td>" . $row['Job'] . "</td>";
//     echo "</tr>";
}
echo $imageName;
echo '<div class="wrapper">
		<header>
			<h1>Minions.com</h1>

		</header>
		<nav>
			<ul>
				<li><a href="http://localhost:8888/mymovie.html" class="current">Home</a></li>
				<li><a href="http://localhost:8888/search.html">Search</a></li>
			</ul>
		</nav>
		<section id="movie-poster">
			<img src="posters/'.$imageName.'" alt="Poster">
		</section>
		<div id="video" align="center">
		<video width="900" height="675" controls>
			<source src="trailers/'.$trailerName.'" type="video/mp4">
			<source src="trailers/'.$trailerName.'" type="video/ogg">
			Your browser does not support the video tag.
		</video>
		</div>
		
		<section id="movie-info">
			<article>
				<h2 id="title">
					<span>'.$title.'</span>(<span>'.$production_year.'</span>)
				</h2>
				<p id="info">
					<span>'.$runtime.' min</span> | <span>'.$production_year.'</span> | <span>'.$genres.'</span>
				</p>
				<div>
					<div id = "rating_display">
						<span class="bullet">Rating: </span><br>
						';
				$rating = intval($rating);
				for ($i=1;$i<=10;$i++){
					if ($i==$rating){
						echo '<input name="star0" type="radio" class="star" disabled="disabled" checked="checked"/> ';
					}
					echo '<input name="star0" type="radio" class="star" disabled="disabled"/> '; 
				}
				echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$rating.'';
				echo '
				
					</div>


					<p>
						<span class="bullet">Director: </span><span class="content">'.$director.'</span>
					</p>
					<p>
						<span class="bullet">Stars: </span><span class="content">'.$actor.'</span>
					</p>
					<p>
						<span class="bullet">Language:</span> <span class="content">'.$language.'</span>
					</p>
					<p id="storyline">
						<span class="bullet">Storyline:</span><br>
					<div class="content">&nbsp;&nbsp;&nbsp;&nbsp;'.$storyline.'
					</div>
					</p>
				</div>


			</article>

			<section id="review">
				<h2>User Reviews</h2>
				
				<form action="handle_review.php" method = "POST">
				<input type="number" name="rating" min="1" max="10"><span>Please input a integer between 1-10;</span>
				<br>
					<textarea id="review_input" rows="15" cols="72" name="review_text"
						wrap="physical"></textarea>
					<br> <input type="submit" id="submit" value="Submit">
				</form>

			</section>';
			$query_reviews='SELECT * FROM reviews,users WHERE reviews.user_id = users.user_id AND movie_id='.$id.'';

			$result_reviews = mysqli_query($con,$query_reviews);
			if(!$result_reviews){
				echo "Result is empty";
			}
			$k =1;
			while($row_reviews = mysqli_fetch_array($result_reviews)) {
				echo'<section id="comment_section">
	 		<p><span class="bullet">'.$row_reviews['user_name'].'</span><span id="comment_rate">    Rated 
				';
				for ($j=1;$j<=10;$j++){
					if ($j==intval($row_reviews['score'])){
						echo '<input name="star'.$k.'" type="radio" class="star" disabled="disabled" checked="checked"/> ';
					}
					echo '<input name="star'.$k.'" type="radio" class="star" disabled="disabled"/> '; 
				}
				echo '&nbsp;&nbsp;&nbsp;&nbsp;'.intval($row_reviews['score']).'';

				echo'
				</span></p>
	 		<p id="comment" class = "content">&nbsp;&nbsp;&nbsp;&nbsp;'.$row_reviews['comments'].'</p>
	 		</section>';
			$k++;
			}
	        


       echo '</section>
		

		<footer> © Yingjie Fan </footer>
	</div>
		';
mysqli_close($con);
echo '</body>
</html>';
?>
