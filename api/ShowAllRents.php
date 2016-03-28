<?php
include '/bd/bd.php';
header("Content-Type:application/json");
if ($conn->connect_error)
{
	//
} else {
	
			//select query
			
			
			
			$sql = "SELECT * FROM rents";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
			{
				// output data of each row
				while($row = $result->fetch_assoc()) {
				deliver_json($row["bookID"],$row["nume"],$row["prenume"],$row["clasa"],$row["rentDate"],$row["backDate"],$row["returned"]);
			}
			} else {
				echo "402";
			}
			$conn->close();
			
		
			
		

		}
		
		
	function deliver_json($bookIDs,$numes,$prenumes,$clasas,$rentDates,$backDates,$returneds)
	{
		header("HTTP/1.1 $bookIDs $numes");
		$response['bookID'] = $bookIDs;
		$response['nume'] = $numes;
		$response['prenume'] = $prenumes;
		$response['clasa'] = $clasas;
		$response['rentDate'] = $rentDates;
		$response['backDate'] = $backDates;
		$response['returned'] = $returned;
		$json_response = json_encode($response);
		echo $json_response;
	}
?>