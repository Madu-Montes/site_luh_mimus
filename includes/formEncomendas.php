<h1 style="text-align: center; color: #ffb8c4;">Encomenda - Passo à Passo</h1>

<form class="form-tot" method="POST" enctype="multipart/form-data" id="addevent">

  <form action="../php/encomendar.php" method="POST">
    <div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
      <div class="card card0 border-0">
        <div class="row d-flex">
          <div class="col-lg-6">
            <div class="card1 pb-5">
              <label for="messageReche" class="formbold-form-label" style="text-align: center;">
                Data para entregar a encomenda
              </label>

              <div class="scroll-escondido">
                <iframe src="../includes/calendario/calendario.php" name="janela" id="frame-spec"></iframe>
              </div>

              </iframe>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card21 card border-0 px-4 py-5" id="forcarBaixo">

              <div class="row px-3">
                <label for="qusOne" class="formbold-form-label" style="font-size: 20px; color: black;">
                  1º Passo - Quantidade
                </label>

                <div class="formbold-radio-flex">
                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="peso" id="qusOne" />
                      1KG
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="peso" id="qusOne" />
                      2KG
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="peso" id="qusOne" />
                      3KG
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="peso" id="qusOne" />
                      4Kg
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row px-3">
                <label for="qusTwo" class="formbold-form-label" style="font-size: 20px; color: black;">
                  2º Passo - Massa
                </label>

                <div class="formbold-radio-flex">
                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="qusTwo" id="qusTwo" />
                      Chocolate
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="massa" id="qusTwo" />
                      Baunilha
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>
                </div>

              </div>
            
              <div class="row px-3">
                <label class="formbold-form-label-2" for="messageTema" style="font-size: 20px; color: black;">
                  4º Passo - Tema
                </label>

                <div class="drag-area" ondrop="upload_file(event)" ondragover="return false" style="margin-bottom: 20px;">

                  <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                  <header>Arrastar Arquivo</header>
                  <span>ou</span>
                  <br>
                  <label for="file">Procurar Arquivo</label>
                  <button hidden>Browse File</button>
                  <input type="file" name="file" id="file" hidden accesskey="i">

                </div>
                <br>
                <textarea rows="6" name="message" id="messageReche" class="formbold-form-input" placeholder="Descreva o Tema"></textarea>
                <script src="../js/uloadoimg.js"></script>
              </div>
              <br>
              <div class="row px-3">
                <label for="opcOne" class="formbold-form-label" style="font-size: 20px; color: black;">
                  5º Passo - Adicionais
                </label>

                <div class="formbold-radio-flex" style="display: block;">
                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="checkbox" name="add" id="opcOne" />
                      Chantininho - Chantilly Leite Ninho
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group" style="display: block;">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="checkbox" name="add" id="opcTwo" />
                      Bolo no acetato
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group" style="display: block;">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="checkbox" name="add" id="opcThree" />
                      Ganache
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row mb-3 px-3">
                <button type="submit" class="formbold-btn add-cart" id="CadEvent">Prosseguir</button>
              </div>

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