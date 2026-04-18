<?php
  include('top.php');
  include('../backend/listar.php');
?>
    <div class="container mt-3">
      <h1>Cadastrar Raça</h1>
      <form action="../backend/cadastrar.php" method="post">

          <div class="mb-3">
            <div class="form-floating">
              <select name="especie_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected disabled>Selecione uma espécie</option>
                <?php listar_select('especie', $conexao); ?>
              </select>
              <label for="floatingSelect">Espécie</label>
            </div>
          </div>

          <div class="mb-3">
            <label for="raca" class="form-label">Raça</label>
            <input type="text" class="form-control" id="raca" name="raca">
          </div> 

          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    

<?php
  include('footer.php');
?>