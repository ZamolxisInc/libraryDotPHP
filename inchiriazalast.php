<?php include 'header.php'; ?>
<?php
$bookID = $_GET["bookid"];
$title = $_GET["title"];

echo '<div class="container">
  <h2>Inchiriaza "'.$title.'"</h2>
  <form role="form" action="inchiriazadirect.php" method="post">
    <div class="form-group">
      <label for="text">BookID:</label>
      <input type="text" class="form-control" id="bookid" value='.$bookID.' name="bookid">
	  
	  <label for="text">Nume:</label>
      <input type="text" class="form-control" id="nume" placeholder="Popescu" name="nume">
	  
	  <label for="text">Prenume:</label>
      <input type="text" class="form-control" id="prenume" placeholder="Ionut" name="prenume">
	  
	  <label for="text">Clasa:</label>
      <input type="text" class="form-control" id="clasa" placeholder="11G" name="clasa">
	  
	</div>
    
    <button type="submit" class="btn btn-default">Inchiriaza</button>
  </form>
</div>';


?>