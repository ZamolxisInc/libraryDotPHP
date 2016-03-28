<?php include 'header.php'; ?>
<?php
if ($conn->connect_error)
{
	echo 'Eroare in conectarea la baza de date';
} else {

	
			
			
			
			$sql = "SELECT * FROM rents WHERE returned = '0' OR backDate IS NULL ORDER BY rentDate DESC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
			{
			echo '
	<table class="table table-condensed">
    <thead>
      <tr>
        <th>bookID</th>
        <th>Nume</th>
        <th>Prenume</th>
		<th>Clasa</th>
		<th>Data Inchirierii</th>
		<th>Data returnarii</th>
		<th>Returnata?</th>
		<th>Returneaza</th>
      </tr>
    </thead>
    <tbody>';
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$returnedVal = $row["returned"];
					$returnText = "NEDEFINITA";
					if($returnedVal != "1")
					{
						$returnText = "NU";
						$returnedVal='<a href="returneazafinal.php?bookid='.$row[bookID].'&nume='.$row[nume].'&clasa='.$row[clasa].'">Returneaza</a> ';
					}
					else{
						$returnText = "DA";
						$returnedVal = 'Returnata';
					}
					echo '<tr><td>'.$row["bookID"].'</td><td>'.$row["nume"].'</td><td>'.$row["prenume"].'</td><td>'.$row["clasa"].'</td><td>'.$row["rentDate"].'</td><td>'.$row["backDate"].'</td><td>'.$returnText.'</td><td>'.$returnedVal.'</td></tr>';
				
				
				}
			echo ' </tbody>
  </table>';
			}
			else {
				echo "<h2>Fara rezultate</h2>";
			}
			$conn->close();
			
		
			
		

		}
		
?>