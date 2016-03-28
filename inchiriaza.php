<?php include 'header.php';  ?>

<div class="container">
  <h2>Cautare dupa BookID</h2>
  <form role="form" action="afisarecartibi.php" method="post">
    <div class="form-group">
      <label for="text">BookID:</label>
      <input type="text" class="form-control" id="bookid" placeholder="1234567" name="bookid">
    </div>
    
    <button type="submit" class="btn btn-default">Cauta</button>
  </form>
</div>

<div class="container">
  <h2>Cautare dupa Autor</h2>
  <form role="form" action="afisarecartiau.php" method="post">
    <div class="form-group">
      <label for="text">Autor:</label>
      <input type="text" class="form-control" id="author" placeholder="Caragiale" name="author">
    </div>
    
    <button type="submit" class="btn btn-default">Cauta</button>
  </form>
</div>

<div class="container">
  <h2>Cautare dupa Titlu</h2>
  <form role="form" action="afisarecartiti.php" method="post">
    <div class="form-group">
      <label for="text">Titlu:</label>
      <input type="text" class="form-control" id="title" placeholder="Moara cu noroc" name="title">
    </div>
    
    <button type="submit" class="btn btn-default">Cauta</button>
  </form>
</div>

