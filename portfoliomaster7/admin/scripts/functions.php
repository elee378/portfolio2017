<?php
	//Open connection to our database
	include('connect.php');

	//condition => this query gets everything that corresponds to the filter passed in
	if(isset($_GET['filter'])){
		//1. Select all portfolio where title = filter
		$filter = $_GET['filter'];

		$filterQuery = "SELECT portfolio_id, portfolio_images FROM tbl_portfolio WHERE portfolio_title = '{$filter}'";

		//cho $filterQuery
		$getPort = mysqli_query($link, $filterQuery);

		$rows = array();

  		while($row = mysqli_fetch_assoc($getPort)) {
    		$rows[] = $row;
    	}

    	echo json_encode($rows);

	 }

	 	if(isset($_GET['getOne'])){
		//1. Select LIGHTBOX CONTENT
		$getOne = $_GET['getOne'];

		$filterQuery = "SELECT  portfolio_imagesLightbox, portfolio_imageDescription FROM tbl_portfolio WHERE portfolio_id = '{$getOne}'";

		//cho $filterQuery
		$getPort = mysqli_query($link, $filterQuery);
 		 // get the result
 		 $row = mysqli_fetch_assoc($getPort);
  		 echo json_encode($row);
	 }

	 // write the get one query and call it from the js file

	mysqli_close($link);
?>