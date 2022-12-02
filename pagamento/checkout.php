<?php
include './configuracao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pagamento | Luh Mimus </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="css/personalizado.css" rel="stylesheet">
        <link rel="stylesheet" href="css/semantic.min.css">
    <link rel="stylesheet" href="css/tab.min.css">
    </head>
    <body>
    <div class="container-fluid">
    <div class="container box">
    <h1>Pagamento</h1>
    <div class="ui top attached tabular menu">
      <a class="active item" data-tab="first"><div class="CartaoCredito">Pagar com cartão</div></a>
      <a class="item" data-tab="second">Pagamento em pix</a>
      <a class="item" data-tab="third">Pagar com boleto</a>
    </div>
    <div class="ui bottom attached active tab segment" data-tab="first">
       <form class="ui form" id="form-fechar-pedido">
          <div class="fields">
                <div class="field">
                  <label>Número do cartão</label>
                  <input type="text" id="numCartao" placeholder="número" name="numCartao">
                </div>
                <div class="bandeira-cartao">

                </div>
            
                <div class="field">
                  <label>Nome no cartão</label>
                  <input type="text" id="nome" placeholder="nome">
                </div>
                <div class="field">
                  <label>CVV</label>
                  <input type="text" id="digitos" placeholder="dígitos" >
                </div>
            </div>

            <div class="fields">
                <div class="field">
                  <label>Validade Mês</label>
                  <input type="text" id="validade-mes" placeholder="mês validade" value="12">
                </div>
                <div class="field">
                  <label>Validade Ano</label>
                  <input type="text" id="validade-ano" placeholder="ano validade" value="2030">
                </div>
                <div class="field">
                  <label>Cartão</label>
                  <select id="bandeira" class="ui fluid dropdown">
                      <option value="">Escolha um cartão</option>
                  </select>
                </div>
                <div class="field">
                  <label>Parcelas</label>
                  <select id="parcelas" class="ui fluid dropdown">
                   <option value-"">Escolha um cartão</option>
                 </select>
                </div>
          </div>
          <div style="margin-bottom:10px;">
              <b>*R$ 450,00 a vista ou em até 4x sem juros de R$ <?php echo number_format(450/4,2,',','.'); ?></b>
          </div>
          <div class="ui divider"></div>
          <div style="margin-bottom:10px;" id="parcelas-cartao">
              Escolha um cartão para ver o número de parcelas com e sem juros
          </div>
          <div class="ui divider"></div>
          <a id="" class="btn btn-dark" href="#" role="button">Fechar pedido</a>
       </form>
          <div id="status-fechar-pedido"></div>
          <div class="ui divider"></div>
          <h3>Cartões Aceitos</h3>
        <div>
            <div class="ui grid container bancos" style="margin-top:10px;font-size:11px;text-align:center;">
            </div>
        </div>

    </div>
    <div class="ui bottom attached tab segment" data-tab="second">
      <div id="mensagem-debito"></div>
      <h2>Pagar com pix</h2>
      <p>Clique no botão abaixo para pagar com pix.</p>
      <a id="" class="btn btn-dark" href="#" role="button">Via Pix</a>
    </div>
    <div class="ui bottom attached tab segment" data-tab="third">
    <div id="mensagem-boleto"></div>
      <h2>Pagar com boleto</h2>
      <p>Clique no botão abaixo para pagar com boleto.</p>
      <a id="" class="btn btn-dark" href="#" role="button">Via Boleto</a>
    </div>
</div>
<div class="btn-pag">

        <button onclick="pagamento()">Pagar</button>
        </div>
        <span class="endereco" data-endereco="<?php echo URL; ?>"></span>
        
        <div class="meio-pag"></div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo SCRIPT_PAGSEGURO; ?>"></script>
        <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/tab.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>
    <script src="js/tab-site.js"></script>
    <script src="js/languages/pt-br.js"></script>
    
    </body>
</html>
