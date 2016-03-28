<?php include 'header.php';  ?>
<?php 
$bookID = $_GET['bookid'];
$title = "";
$author = "";
$total = "";
$free = "";
$details = "";
$sql = "SELECT * FROM books WHERE bookID = '".$bookID."'";
				$result = $conn->query($sql);

					while($row = $result->fetch_assoc())
						{
						$title = $row["title"];
						$author = $row["author"];
						$total = $row["total"];
						$free = $row["free"];
						$details = $row["details"];
						}	
				


if(!empty($bookID))
{
	echo '
<div class="container">
  <h2>Editeaza cartea '.$title.' - '.$author.'</h2>
  <form role="form" action="/api/editbook.php" method="post">
    <div class="form-group">
      <label for="text">BookID:</label>
      <input type="text" class="form-control" id="bookid" value='.$bookID.' name="bookid">
	  <label for="text">Titlu:</label>
      <input type="text" class="form-control" id="title" value='.$title.' name="title">
	  <label for="text">Autor:</label>
      <input type="text" class="form-control" id="author" value='.$author.' name="author">
	  <label for="text">Total:</label>
      <input type="text" class="form-control" id="total" value='.$total.' name="total">
	  <label for="text">Libere:</label>
      <input type="text" class="form-control" id="free" value='.$free.' name="free">
	  <label for="text">Detalii:</label>
      <input type="text" class="form-control" id="detalii" value='.$details.' name="detalii">
    </div>
    
    <button type="submit" class="btn btn-default">Editeaza carte</button>
  </form>
</div>';
}
else
	
	{
		echo '
<div class="container">
  <h2>Editeaza carte</h2>
  <form role="form" action="/api/editbook.php" method="post">
    <div class="form-group">
      <label for="text">BookID:</label>
      <input type="text" class="form-control" id="bookid" placeholder="1234567" name="bookid">
	  <label for="text">Titlu:</label>
      <input type="text" class="form-control" id="title" placeholder="Moara cu noroc" name="title">
	  <label for="text">Autor:</label>
      <input type="text" class="form-control" id="author" placeholder="Ion Luca Caragiale" name="author">
	  <label for="text">Total:</label>
      <input type="text" class="form-control" id="total" placeholder="10" name="total">
	  <label for="text">Libere:</label>
      <input type="text" class="form-control" id="free" placeholder="10" name="free">
	  <label for="text">Detalii:</label>
      <input type="text" class="form-control" id="detalii" placeholder="Una e rupta" name="detalii">
    </div>
    
    <button type="submit" class="btn btn-default">Editeaza carte</button>
  </form>
</div>';
		
	}

?>
