<?php
  include('top.php');
  include('../backend/listar.php');

  $animal_id = 0;
  if (isset($_GET["animal_id"]))
    $animal_id = $_GET["animal_id"];
?>
    <div class="container mt-3">
      <h1>Prestação de Serviço</h1>

      <p>Listando o relatório de todos. Para filtrar por animal, selecione no filtro abaixo.</p>
      <form action="relatorio_servico.php">
          <div class="mb-3">
            <div class="form-floating">
              <select name="animal_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected disabled>Listar todos (últimos 10)</option>
                <?php listar_select('animal', $conexao); ?>
              </select>
              <label for="floatingSelect">Animal</label>
            </div>
          </div>
  
          <button type="submit" class="btn btn-primary">Filtrar</button>
      </form>
      

      <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Tutor</th>
                <th scope="col">Serviço</th>
            </tr>
        </thead>
        <tbody>
            <?php
                listar_relatorio($animal_id, $conexao);
            ?>
        </tbody>
        </table>
    </div>
    

<?php
  include('footer.php');
?>