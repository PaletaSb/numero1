<?php
  include('top.php');
?>
    <div class="container mt-3">
      <h1>Cadastrar espécie</h1>
      <form action="../backend/cadastrar.php" method="post">

          <div class="mb-3">
            <label for="especie" class="form-label">Espécie</label>
            <input type="text" class="form-control" id="especie" name="especie">
          </div> 

          <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
    

<?php
  include('footer.php');
?>