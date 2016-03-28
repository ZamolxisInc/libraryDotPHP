<?php
include '/bd/bd.php';
//header("Content-Type:application/json");
if ($conn->connect_error)
{
	//
} else {
	$bookID = $_POST['bookid'];
	if(!empty($bookID))
		{
			//insert querry
			$sql = "DELETE FROM books WHERE bookID='".$bookID."'";
			//$result = $conn->query($sql);

			if ($conn->query($sql) === TRUE) { 
			{
				echo '406';//recorded to db
				
			}
			} else {
				echo "407";
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