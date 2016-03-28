<?php include 'header.php';  ?>
<?php 
$bookID = $_GET['bookid'];
$nume = $_GET['nume'];
$clasa = $_GET['clasa'];
$sqlStatus = "UPDATE rents SET backDate=date(now()), returned='1' WHERE bookID='".$bookID."' AND nume='".$nume."' AND clasa='".$clasa."'";
$sqlPlus = "UPDATE books SET free=free+1 WHERE bookID = '".$bookID."'";			
if(!empty($bookID) && !empty($nume) && !empty($clasa))
{	
			if ($conn->query($sqlStatus) === TRUE) 
						{
							echo '<p>Statusul inchirierii a fost modificat';//recorded to db
							if ($conn->query($sqlPlus) === TRUE) {
							
								echo '<p>Numarul nou de carti libere a fost modificat';//recorded to db
					
							}
							else
							{
								echo '<p>Numarul nou de carti libere NU a fost modificat';//recorded to db
					
							}
						}
							 else {
								echo "<p>Statusul inchirierii NU a fost modificat"; // cannot be recorded to db
							}
				
}
else
{
	echo '<p>Lipsesc parametrii!!!!';
}



?>