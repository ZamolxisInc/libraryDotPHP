<?php
include '/bd/bd.php';
header("Content-Type:application/json");
if ($conn->connect_error)
{
	//
} else {
	$title = $_GET['title'];
	if(!empty($title))
		{
			//select query
			
			
			
			$sql = "SELECT * FROM books WHERE title LIKE \"%".$title."%\"";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
			{
				// output data of each row
				while($row = $result->fetch_assoc()) {
				deliver_json($row["entryID"],$row["bookID"],$row["title"],$row["author"],$row["total"],$row["free"],$row["details"]);
			}
			} else {
				echo "402";
			}
			$conn->close();
			
		
			
		}
		else
			{
	
				echo '403';//NULL QUERY
				$conn->close();
			}

		}
		
		
	function deliver_json($entryIDs,$bookIDs,$titles,$authors,$totals,$frees,$details)
	{
		header("HTTP/1.1 $titles $authors");
		$response['entryID'] = $entryIDs;
		$response['bookID'] = $bookIDs;
		$response['title'] = $titles;
		$response['author'] = $authors;
		$response['total'] = $totals;
		$response['free'] = $frees;
		$response['detail'] = $details;
		$json_response = json_encode($response);
		echo $json_response;
	}
?>