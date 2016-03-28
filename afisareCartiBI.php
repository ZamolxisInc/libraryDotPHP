<?php include 'header.php'; ?>
<?php
$bookID = $_POST["bookid"];
if ($conn->connect_error)
{
	echo 'Eroare in conectarea la baza de date';
} else {

	if(!empty($bookID))
		{
			//select query
			
			
			
			$sql = "SELECT * FROM books WHERE bookID = ".$bookID;
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
			{
			echo '
	<table class="table table-condensed">
    <thead>
      <tr>
        <th>Nr. Ordine</th>
        <th>bookID</th>
        <th>Titlu</th>
		<th>Autor</th>
		<th>Total</th>
		<th>Libere</th>
		<th>Detalii</th>
		<th>Inchriaza</th>
      </tr>
    </thead>
    <tbody>';
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo '<tr><td>'.$row["entryID"].'</td><td>'.$row["bookID"].'</td><td>'.$row["title"].'</td><td>'.$row["author"].'</td><td>'.$row["total"].'</td><td>'.$row["free"].'</td><td>'.$row["details"].'</td><td><a href="inchiriazalast.php?bookid='.$row[bookID].'&title='.$row[title].'">Inchiriaza</a> / <a href="editeaza.php?bookid='.$row[bookID].'">Editeaza</a></td></tr>';
				
				
				}
			echo ' </tbody>
  </table>';
			}
			else {
				echo "<h2>Fara rezultate</h2>";
			}
			$conn->close();
			
		
			
		}
		else
			{
	
				echo 'BookID-ul nu poate fi gol.';//NULL QUERY
				$conn->close();
			}

		}
		
?>