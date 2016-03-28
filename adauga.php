<?php include 'header.php';  ?>

<div class="container">
  <h2>Adauga carte</h2>
  <form role="form" action="/api/addbook.php" method="post">
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
    
    <button type="submit" class="btn btn-default">Adauga carte</button>
  </form>
</div>