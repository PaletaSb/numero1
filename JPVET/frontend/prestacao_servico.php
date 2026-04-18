<?php
  include('top.php');
  include('../backend/listar.php');
?>
    <div class="container mt-3">
      <h1>Prestação de Serviço</h1>
      <form action="../backend/cadastrar.php" method="post" >
         
          <div class="mb-3">
            <div class="form-floating">
              <select name="id_servico" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected disabled>Selecione o serviço prestado</option>
                <?php listar_select('servicos', $conexao); ?>
              </select>
              <label for="floatingSelect">Serviço</label>
            </div>
          </div>

          <div class="mb-3">
            <div class="form-floating">
              <select name="id_animal" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected disabled>Selecione o animal</option>
                <?php listar_select('animal', $conexao); ?>
              </select>
              <label for="floatingSelect">Animal</label>
            </div>
          </div>

          

          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    

<?php
  include('footer.php');
?>