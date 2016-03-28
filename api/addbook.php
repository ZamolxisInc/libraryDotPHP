<?php
include '/bd/bd.php';
//header("Content-Type:application/json");
if ($conn->connect_error)
{
	//
} else {
	//$entryID = $_POST['entryid'];
	$bookID = $_POST['bookid'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$total = $_POST['total'];
	$free = $_POST['free'];
	$details = $_POST['details'];
	if(!empty($bookID))
		{
			//insert querry
			
			
			$maxEntryS = "SELECT MAX(entryID) FROM books";
			$maxEntry = (int)$maxEntryS;
			$sql = "INSERT INTO books (entryID,bookID, title, author, total, free, details) VALUES ('".$maxEntry."', '".$bookID."', '".$title."', '".$author."', '".$total."', '".$free."', '".$details."')";
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