<?php

if (isset($_POST['btn'])) {

    if (isset($_FILES['imagem']['tmp_name'])) {

        $cfile =  new CURLFile($_FILES['imagem']['tmp_name'], $_FILES['imagem']['type'], $_FILES['imagem']['name']);
    }

    $dados = array(
        'nome' => $_POST['nome'],
        'descricao' => $_POST['descricao'],
        'preco' => $_POST['preco'],
        'imagem' => $cfile
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

    $result = curl_exec($ch);
    header('location: ../../index.php');
}
