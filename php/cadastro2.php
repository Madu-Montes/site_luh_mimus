<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <title>Document</title>
</head>
<link rel="stylesheet" href="../css/login2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<body>
    <div class="container-fluid botaovolta">
       <a href="../index.html" class="font-weight-bold back"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
      </svg></a>
    </div>

<form action="../php/salvar.php" method="POST">
    <div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row">
                            <img src="../images/logo da luh.png" class="logo">
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="../images/cadastro.svg" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Nome</h6></label>
                            <input class="mb-4" type="text" name="nome" placeholder="Digite seu nome completo" required maxlength="256" required>
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Email</h6></label>
                            <input class="mb-4" type="email" onblur="mascaraDeTelefone(this)"  required onfocus="tiraHifen(this)" name="email" placeholder="Digite um endereço de email válido" required maxlength="256">

                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Celular</h6></label>
                            <input class="mb-4" type="text" name="celular" id="telefone" placeholder="(DDD)99999-9999" required requiredonfocus="javascript: retirarFormataca(this);" onblur="javascript: formatarCampo(this);"
                                maxlength="14">
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Data de nascimento</h6></label>
                            <input class="mb-4" type="date" name="dtn" placeholder="" required maxlength="256">
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">CPF</h6></label>
                            <input class="mb-4" type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" requiredonfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" maxlength="14" required>
                        </div>
                        <p id="resposta"></p>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Senha</h6></label>
                            <input type="password" name="senha" placeholder="Digite a senha" required>
                        </div>
                        <br>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Endereço</h6></label>
                            <input class="mb-4" type="text" name="Endereco" placeholder="Endereço" required maxlength="256">
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm"></h6>Nº</label>
                            <input class="mb-4" type="text" name="n_residencia" id="telefone" placeholder="Número da Residência" required>
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">CEP</h6></label>
                            <input class="mb-4" type="text" name="cep" id="cep" placeholder="Digite seu CEP" requiredonfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" maxlength="8" required>
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Complemento</h6></label>
                            <input class="mb-4" type="text" name="complemento" placeholder="Complemento,  Referências do local da entrega"  maxlength="256">
                        </div>
                        <br>
                        <br>
                        <div class="row mb-3 px-3">
                            <button type="submit" class="btn btn-blue text-center" style="background-color: #FCCAD5; color: black; display: block; margin-left: auto; margin-right: auto;">Cadastrar</button>
                        </div>
                        <script src="../js/mascaras.js"></script>
                    </div>
                </div>
            
            </div>

           
            <div class="bg-blue py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2022. Luh Mimu’s.</small>
                    <div class="social-contact ml-4 ml-sm-auto">
                        <span class="fa fa-facebook mr-4 text-sm"></span>
                        <span class="fa fa-instagram mr-4 text-sm"></span>
                        <span class="fa fa-whatsapp mr-4 mr-sm-5 text-sm"></span>
                    </div>
                </div>
            </div>
    </div> 
</form>
</body>
</html>