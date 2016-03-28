<?php
include '/bd/bd.php';
//header("Content-Type:application/json");
if ($conn->connect_error)
{
	//
} else {
	//$entryID = $_POST['entryid'];
	$bookID = $_POST['bookid'];
	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	$clasa = $_POST['clasa'];
	if(!empty($bookID))
		{
			
			
			
			//$updateFreeBooks="UPDATE books SET free=free-1 WHERE bookID = '".$bookID."'";
			$sql = "INSERT INTO rents(bookID,nume,prenume,clasa,rentDate,returned) VALUES ('".$bookID."', '".$nume."', '".$prenume."', '".$clasa."', date(now()), '0')";
			

					if ($conn->query($sql) === TRUE) { 
						{
							echo '406';//recorded to db
				
						}
							} else {
								echo "407"; // cannot be recorded to db
							}
				$conn->close();
				
		}
			else
			{
	
				echo '403';//NULL QUERY
				$conn->close();
			}

		}
	
	
?>