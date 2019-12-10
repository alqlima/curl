<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://alunos.b7web.com.br/api/ping");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Ele não esta com o certificado SSL atualizado na sua máquina

//para instalar, é só seguir:
/*


1) Faça o download do cacert.pem mais recente em https://curl.haxx.se/ca/cacert.pem

2) Adicione a seguinte linha ao php.ini

curl.cainfo="/path/to/downloaded/cacert.pem" (Ao final do php.ini, verifica se já tem a linha, se não ativier adiciona.)

Certifique-se de colocar o caminho entre aspas duplas !!!


ou, você pode simplesmente ignorar o ssl usando 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
que fica bem mais prático :) Valeu ! Muito obrigado

Disponha, bons estudos!!! ok, Vou seguir seu conselho quando precisar vou utilizar apenas aquela linha de comando.
*/
curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=Andre&idade=90&sexo=masculino");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($ch);

curl_close($ch);
print_r($resposta);
//var_dump($resposta);
?>
