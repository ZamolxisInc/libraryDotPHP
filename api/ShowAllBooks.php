<?php
include '/bd/bd.php';
header("Content-Type:application/json");
if ($conn->connect_error)
{
	//
} else {
	
			//select query
			
			
			
			$sql = "SELECT * FROM books";
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
		
		
	function deliver_json($entryID,$bookID,$title,$author,$total,$free,$details)
	{
		header("HTTP/1.1 $bookIDs $numes");
		$response['entryID'] = $entryID;
		$response['bookID'] = $bookID;
		$response['title'] = $title;
		$response['author'] = $author;
		$response['total'] = $total;
		$response['free'] = $free;
		$response['details'] = $details;
		$json_response = json_encode($response);
		echo $json_response;
	}
?>