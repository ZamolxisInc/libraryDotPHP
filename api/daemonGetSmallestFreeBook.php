<?php
//$updateFreeBooks="UPDATE books SET free=free-1 WHERE bookID = '".$bookID."'";
include '/bd/bd.php';
//header("Content-Type:application/json");
$minFree = 0;
$bookIDmin="";
$titlemin="";
if ($conn->connect_error)
{
	//
} else {
		
				
				$sql = "SELECT * FROM books";
				$result = $conn->query($sql);

					while($row = $result->fetch_assoc())
						{
							if($row["free"]<$minFree)
							{
								$minFree=$row["free"];
								$bookIDmin=$row["bookID"];
								$titlemin=$row["title"];
							}
						}
					echo $minFree. "~". $bookIDmin . "~". $titlemin;
				
				$conn->close();			
			}
			

		
		
?>