<?php include 'header.php';  ?>

<div class="container">
  <h2>Returneaza carte</h2>
  <form role="form" action="returneazafinal.php" method="get">
    <div class="form-group">
      <label for="text">BookID:</label>
      <input type="text" class="form-control" id="bookid" placeholder="1234567" name="bookid">
	  <label for="text">Nume:</label>
      <input type="text" class="form-control" id="nume" placeholder="Popescu" name="nume">
	  <label for="text">Clasa:</label>
      <input type="text" class="form-control" id="clasa" placeholder="11G" name="clasa">
    </div>
    
    <button type="submit" class="btn btn-default">Returneaza cartea</button>
  </form>
</div>

