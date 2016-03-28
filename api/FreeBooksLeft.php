<?php
//$updateFreeBooks="UPDATE books SET free=free-1 WHERE bookID = '".$bookID."'";
include '/bd/bd.php';
//header("Content-Type:application/json");
if ($conn->connect_error)
{
	//
} else {
		$bookID = $_GET['bookid'];
		if(!empty($bookID))
			{
				
				$sql = "SELECT free FROM books WHERE bookID = '".$bookID."'";
				$result = $conn->query($sql);

					while($row = $result->fetch_assoc())
						{
						echo $row["free"];
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