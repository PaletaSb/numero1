<?php
    include('con.php');

    function listar_select($tabela, $conexao) {
        $sql = "SELECT * FROM {$tabela}";


        $column = $tabela;

        if($tabela == "servicos") {
            $column = "servico";
        } else if($tabela == "animal") {
            $column = "nome";
        }

        $result = mysqli_query($conexao, $sql);

        while($row = mysqli_fetch_assoc($result)) {

            $value = $row["id"];
            $text = $row[$column];

            echo "<option value=\"{$value}\">{$text}</option>";

        }
    }


    function listar_relatorio($animal_id, $conexao) {
        $sql = "select ase.id, ani.nome, ani.tutor, ser.servico from animal_servico ase
                inner join animal ani on ani.id = ase.id_animal
                inner join servicos ser on ser.id = ase.id_servico";

        if($animal_id != 0) {
            $sql .= " where ani.id = {$animal_id} ";
        }

        $sql .= " order by id desc";      

        if($animal_id != 0) {
            $sql .= " limit 10 ";
        }

        $result = mysqli_query($conexao, $sql);

        while($row = mysqli_fetch_assoc($result)) {

            $nome = $row["nome"];
            $tutor = $row["tutor"];
            $servico = $row["servico"];

            echo "<tr>
                        <td>{$nome}</td>
                        <td>{$tutor}</td>
                        <td>{$servico}</td>
                    </tr>";

        }
        
    }

?>