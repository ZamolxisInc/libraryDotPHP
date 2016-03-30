<?php include 'header.php';  ?>

<div class="container">
  <h2>Carti</h2>
  <a href="afisaretoatecartile.php" class="btn btn-info" role="button">Toate cartile</a>
  <a href="inchiriaza.php" class="btn btn-info" role="button">Cauta carte</a>
  <a href="editeaza.php" class="btn btn-info" role="button">Editeaza Carte</a>
  <a href="adauga.php" class="btn btn-info" role="button">Adauga Carte</a>
    <a href="sterge.php" class="btn btn-info" role="button">Sterge Carte</a>
  <h2>Inchirieri</h2>
  <a href="inchiriaza.php" class="btn btn-info" role="button">Inchiriaza carte</a>
  <a href="showallrents.php" class="btn btn-info" role="button">Vezi toate cartile inchiriate</a>
  <a href="showallunreturned.php" class="btn btn-info" role="button">Vezi cartile nereturnate</a>
  <a href="returneaza.php" class="btn btn-info" role="button">Returneaza carte</a>
</div>

<?php


			$sql = "SELECT COUNT(*) AS nr FROM rents";
			$result = $conn->query($sql);
			$total = 0;
			if ($result->num_rows >= 0) 
			{
				while($row = $result->fetch_assoc()) {
					
				$total = (int)$row["nr"];
				}
			}
			$sql2 = "SELECT COUNT(*) AS nr FROM rents WHERE backDate IS NULL";
			$result2 = $conn->query($sql2);
			$unreturned = 0;
			if ($result2->num_rows >= 0) 
			{
				while($row = $result2->fetch_assoc()) {
					
				$unreturned = (int)$row["nr"];
				}
			}

?>

<h2><center>Statistica</center></h2>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
		 var total = parseInt("<?php echo $total; ?>");
		  var unreturned = parseInt("<?php echo $unreturned; ?>");
        var data = google.visualization.arrayToDataTable([
          ['Carti', 'Carti nereturnate'],
          ['Total',     total],
          ['Nereturnate',      unreturned]
        ]);

        var options = {
          title: 'Situatia cartilor returnate'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
<center>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
	</center>	
	<center>
	<table class="table table-condensed">
    <thead>
	<h2>Top carti imprumutate</h2>
      <tr>
        <th>Clasa</th>
        <th>Numarul total de carti imprumutate</th>
      </tr>
    </thead>
    <tbody>
	
<?php


			$sql3 = "SELECT clasa,COUNT(*) AS nr FROM rents GROUP BY clasa ORDER BY COUNT(*) DESC LIMIT 5;";
			$result3 = $conn->query($sql3);
			if ($result3->num_rows >= 0) 
			{
				while($row = $result3->fetch_assoc()) {
					
				echo '<tr><td>'.strtoupper($row["clasa"]).'</td><td>'.$row["nr"].'</td></tr>';
				
				}
			}
			//$conn->close();

?>
	</tbody>
  </table>
  
  
 
			
<table class="table table-condensed">
    <thead>
	<h2>Top elevi care imprumuta carti</h2>
      <tr>
        <th>Clasa</th>
		<th>Nume</th>
		<th>Prenume</th>
        <th>Numarul total de carti imprumutate</th>
      </tr>
    </thead>
    <tbody>
	
<?php


			$sql3 = "SELECT clasa,nume,prenume,COUNT(*) AS nr FROM rents GROUP BY clasa,nume ORDER BY COUNT(*) DESC LIMIT 5;";
			$result3 = $conn->query($sql3);
			if ($result3->num_rows >= 0) 
			{
				while($row = $result3->fetch_assoc()) {
					
				echo '<tr><td>'.strtoupper($row["clasa"]).'</td><td>'.strtoupper($row["nume"]).'</td><td>'.strtoupper($row["prenume"]).'</td><td>'.strtoupper($row["nr"]).'</td></tr>';
				
				}
			}
			$conn->close();

?>
	</tbody>
  </table>			
  
  
  
  
  <footer>
  
  <p><center>Made with love by Zamolxis @2016</center></p>
  </footer>
