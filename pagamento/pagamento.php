<?php

include 'configuracao.php';

  //concatenação da variável global URL_PAGSEGURO, coma asessão do pagseguro
  $url = URL_PAGSEGURO . "sessions?email=" . EMAIL_PAGSEGURO . "&token=" . TOKEN_PAGSEGURO;

  //curl = ferramenta para recuperar requisições
 $curl = curl_init($url);

 curl_setopt_array($curl, [
     CURLOPT_RETURNTRANSFER => true,
     CURLOPT_SSL_VERIFYPEER => true,
     CURLOPT_ENCODING => "",
     CURLOPT_MAXREDIRS => 10,
     CURLOPT_TIMEOUT => 30,
     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
     CURLOPT_CUSTOMREQUEST => "POST",
     CURLOPT_HTTPHEADER => [
       "accept: application/xml",
       "content-type: application/json; charset=UTF-8"
     ],
   ]);
   
 $response = curl_exec($curl);
 $err = curl_error($curl);

 curl_close($curl);
 $xml=simplexml_load_string($response);
 echo json_encode($xml);

 if ($err) {
 echo "cURL Error #:" . $err;
 } else {
 echo $response;
 }