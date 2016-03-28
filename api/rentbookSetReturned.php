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
	$clasa = $_POST['clasa'];
	if(!empty($bookID) && !empty($nume) && !empty($clasa))
		{
			
			
			
			//$updateFreeBooks="UPDATE books SET free=free-1 WHERE bookID = '".$bookID."'";
			$sql = "UPDATE rents SET bookID='".$bookID."', nume='".$nume."', clasa='".$clasa."', backDate=date(now()), returned='1' WHERE bookID='".$bookID."' AND nume='".$nume."' AND clasa='".$clasa."'";
			

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