<?php

if (isset($_GET['id'])) {
    $url = "http://127.0.0.1:8000/api/produtos/" . $_GET['id'];
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = json_decode(curl_exec($ch));


    echo "<pre>";
    var_dump($result);

    echo $result['produto'];
}

?>
