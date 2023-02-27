<?php

if (isset($_POST['btn'])) {

    $dados = array(
        'nome' => $_POST['nome'],
        'descricao' => $_POST['descricao'],
        'preco' => $_POST['preco'],
        'imagem' => $_POST['imagem']
    );

    //code...
    $url = "http://127.0.0.1:8000/api/produtos";
    $ch = curl_init($url);
    
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => $dados
    ]);

    $resuldado = curl_exec($ch);
    curl_close($ch);
    var_dump($resuldado);
}
