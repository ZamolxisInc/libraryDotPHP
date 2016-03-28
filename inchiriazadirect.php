<?php include 'header.php'; ?>
<?php
$bookID = $_POST["bookid"];
$nume = $_POST["nume"];
$prenume = $_POST["prenume"];
$clasa = $_POST["clasa"];
$free = "0";
if ($conn->connect_error)
{
	//
} else {
		
		if(!empty($bookID))
			{
				
				$sql = "SELECT free FROM books WHERE bookID = '".$bookID."'";
				$result = $conn->query($sql);

					while($row = $result->fetch_assoc())
						{
						$free = (int)$row["free"];
						}	
				
				
				if($free <= 0)
			{
				echo '<h2>Aceasta carte nu poate fi inchiriata deoarece toate exemplarele au fost epuizate<h/2>';
			}
			else
			{
				
				
			 // setRent();
				$sql = "UPDATE books SET free=free-1 WHERE bookID = '".$bookID."'";
			

					if ($conn->query($sql) === TRUE) { 
						{
							echo '<p>406 - Numarul de carti libere a fost actualizat</p>';//recorded to db
				
						}
							} else {
								echo "<p>407 - Numarul de carti libere nu a putut fi actualizat !!!</p>"; // cannot be recorded to db
							}
				
				$sql = "INSERT INTO rents(bookID,nume,prenume,clasa,rentDate,returned) VALUES ('".$bookID."', '".$nume."', '".$prenume."', '".$clasa."', date(now()), '0')";
			

					if ($conn->query($sql) === TRUE) { 
						{
							echo '<p>406 - Inchirierea a fost inscrisa cu succes</p>';//recorded to db
							minusOne();
						}
							} else {
								echo "<p>407 - Inchirierea nu a putut fi inscrisa !!!</p>"; // cannot be recorded to db
							}
				
				
				//
			}
				
				
			}
			else
			{
				echo '<h2>403 - Un parametru lipseste, te rugam sa reincerci</h2>';//NULL QUERY
			}

		}

		function minusOne()
		{
			$sql = "UPDATE books SET free=free-1 WHERE bookID = '".$bookID."'";
			

					if ($conn->query($sql) === TRUE) { 
						{
							echo '406 - Numarul de carti libere a fost actualizat';//recorded to db
				
						}
							} else {
								echo "407 - Numarul de carti libere nu a putut fi actualizat !!!"; // cannot be recorded to db
							}
		}
	
		function setRent()
		{
			$sql = "INSERT INTO rents(bookID,nume,prenume,clasa,rentDate,returned) VALUES ('".$bookID."', '".$nume."', '".$prenume."', '".$clasa."', date(now()), '0')";
			

					if ($conn->query($sql) === TRUE) { 
						{
							echo '406 - Inchirierea a fost inscrisa cu succes';//recorded to db
							minusOne();
						}
							} else {
								echo "407 - Inchirierea nu a putut fi inscrisa !!!"; // cannot be recorded to db
							}
		}

?>