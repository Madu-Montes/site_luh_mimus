<?php

 //url do servidor
 define("URL", "https://luhmimus.com.br/pagamento/");


 //variável sandbox, se estiver true = testes/false=produção
 $sandbox = true;
 //define se vai estar em teste ou produção 
 if ($sandbox){
     //teste
     define("EMAIL_PAGSEGURO","luhmimuss@outlook.com" ); //email do cliete
     define("TOKEN_PAGSEGURO","87B0C3421373471EAE29A27197A8E20E" ); //token do cliente
     define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/"); //URL método 
     define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"); //URL script js 

 }else{
     //produção
     define("EMAIL_PAGSEGURO","luhmimuss@outlook.com" ); //email da clienete
     define("TOKEN_PAGSEGURO","e35ab03f-d11c-430a-ab0f-fba205e113cc295326014996be7be23db2547742ea98c04a-99c9-4291-b48f-73c42370115a" ); //token do cliente
     define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/"); //URL método 
     define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"); //URL script js 
 }