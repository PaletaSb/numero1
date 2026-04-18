<?php
  include('top.php');
  include('../backend/listar.php');
?>
    <div class="container mt-3">
      <h1>Cadastrar animal</h1>
      <form action="../backend/cadastrar.php" method="post" >

          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
          </div>

          <div class="mb-3">
            <label for="tutor" class="form-label">Tutor</label>
            <input type="text" class="form-control" id="tutor" name="tutor">
          </div>
          
          <div class="mb-3">
            <div class="form-floating">
              <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected disabled>Selecione a espécie</option>
                <?php listar_select('especie', $conexao); ?>
              </select>
              <label for="floatingSelect">Espécie</label>
            </div>
          </div>

          <div class="mb-3">
            <div class="form-floating">
              <select name="raca" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected disabled>Selecione a raça</option>
                <?php listar_select('raca', $conexao); ?>
              </select>
              <label for="floatingSelect">Raça</label>
            </div>
          </div>       

          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    

<?php
  include('footer.php');
?>