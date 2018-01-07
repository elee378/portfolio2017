<?php
	
	//Open connection to our database
	include('connect.php');

	//condition
	if(isset($_GET['filter'])){
		//1. Showing movies by genre
		$filter = $_GET['filter'];
		$filterQuery = "SELECT m.movies_id, m.movies_cover, m.movies_title, m.movies_year FROM tbl_movies m, tbl_genre g, tbl_mov_genre mg WHERE m.movies_id = mg.movies_id AND g.genre_id = mg.genre_id AND g.genre_name = '{$filter}'";
		//echo $filterQuery
		$getMovies = mysqli_query($link, $filterQuery);
	}else if(isset($_GET['id'])){
		// 2. Select single movie
		$id = $_GET['id'];
		$singleQuery = "SELECT * FROM tbl_movies WHERE movies_id={$id}";
		$getMovies = mysqli_query($link, $singleQuery);
	}else if(isset($_GET['srch'])){
		// 3. Select movie that user searched
		$srch = $_GET['srch'];
		$srchQuery = "SELECT movies_id, movies_cover, movies_title, movies_year FROM tbl_movies WHERE movies_title LIKE '$srch%' ORDER BY movies_title ASC";
		//echo $srchQuery;
		$getMovies = mysqli_query($link, $srchQuery);
	}else{
	//4. Select All Movies
	$movieQuery = "SELECT movies_id, movies_cover, movies_title, movies_year FROM tbl_movies ORDER BY movies_title ASC";
	$getMovies = mysqli_query($link, $movieQuery);
	}

	$grpResult="";

	echo "[";

	while($movResult = mysqli_fetch_assoc($getMovies)) {
		  $jsonResult = json_encode($movResult);
		  $grpResult .= $jsonResult.",";
		  echo $grpResult;
	}

	echo substr($grpResult, 0, -1);

	echo "]";
	//close connection to our database
	mysqli_close($link);

?>