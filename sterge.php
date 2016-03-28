<?php include 'header.php';  ?>

<div class="container">
  <h2>Cautare dupa BookID</h2>
  <form role="form" action="/api/removebook.php" method="post">
    <div class="form-group">
      <label for="text">BookID:</label>
      <input type="text" class="form-control" id="bookid" placeholder="1234567" name="bookid">
    </div>

 <button type="submit" class="btn btn-default">Sterge</button>
</form>