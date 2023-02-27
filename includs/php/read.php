<?php

$url = "http://127.0.0.1:8000/api/produtos";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = json_decode(curl_exec($ch));

// echo "<pre>";
// print_r($result);
// exit
// 
?>

<h1 class="mt-5">Lista de todos os produtos</h1>
<a class="btn btn-success" href="create.php">Adicionar</a>


<div class="table-responsive col-10">
    <table class="table table-striped mt-2 table-bordered table-sm table align-middle">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descricao</th>
                <th scope="col">Preco</th>
                <th scope="col">Imagem</th>
                <th scope="col">Opcoes</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            $n = 1;
            foreach ($result->produtos as $produto) {
                echo '
                <tr>
                <th scope="row">' . $n . '</th>
                <td>' . $produto->nome . '</td>
                <td>' . $produto->descricao . '</td>
                <td>' . $produto->preco . '</td>
                <td><img src=' . $produto->imagem . '></td>
                <td>
                <a href="" class="btn btn-danger">Deletar</a>
                <a href="" class="btn btn-primary">Editar</a>
                <a href="" class="btn btn-success">Detalhes</a>
                </td>
                </tr>
            ';
                $n++;
            }
            ?>
        </tbody>
    </table>
</div>