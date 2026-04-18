<?php
  include('top.php');
?>
    <div class="container mt-3">
      <h1>Cadastrar Serviço</h1>
      <form action="../backend/cadastrar.php" method="post">

          <div class="mb-3">
            <label for="servico" class="form-label">Serviço</label>
            <input type="text" class="form-control" id="servico" name="servico">
          </div> 

          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    

<?php
  include('footer.php');
?>