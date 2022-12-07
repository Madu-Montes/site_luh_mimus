<h1 style="text-align: center; color: black;">Encomenda - Passo à Passo</h1>

<form class="form-tot" method="POST" enctype="multipart/form-data" id="addevent" action="../php/encomendar.php">
    <div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
 
        <div class="row d-flex">
          <!-- <div class="col-lg-6">
            <div class="card1 pb-5">
              <label for="messageReche" class="formbold-form-label" style="text-align: center;">
                Data para entregar a encomenda
              </label>

              <div class="scroll-escondido">
                <iframe src="../includes/calendario/calendario.php" name="janela" id="frame-spec"></iframe>
              </div>

              </iframe>
            </div>
          </div> -->


          <div class="col-8">
            <div class="card21 card border-0 px-4 py-5" id="forcarBaixo">

              <div class="row px-3">
                <label for="qusOne" class="formbold-form-label" style="font-size: 20px; color: black;">
                  1º Passo - Quantidade
                </label>

                <div class="formbold-radio-flex">
                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label" style="font-size: 15px;">
                      <input class="formbold-input-radio" type="radio" name="peso" id="1" value="1">
                      1KG
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label" style="font-size: 15px;">
                      <input class="formbold-input-radio" type="radio" name="peso" id="2" value="2">
                      2KG
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label" style="font-size: 15px;">
                      <input class="formbold-input-radio" type="radio" name="peso" id="3" value="3">
                      3KG
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label" style="font-size: 15px;">
                      <input class="formbold-input-radio" type="radio" name="peso" id="4" value="4">
                      4Kg
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row px-3">
                <label for="qusTwo" class="formbold-form-label" style="font-size: 20px; color: black; margin-bottom: 0px;">
                  2º Passo - Massa
                </label>
                <select name="massa" id="massa" style="margin: 10px;"> 
                  <option value="baunilha">Baunilha (massa branca)</option>
                  <option value="chocolate">Chocolate</option>
                  <option value="morango">Morango</option>
                </select>
                
              
          
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
                  <input type="file" name="img" id="file" >

                </div>
                <br>
                <label class="formbold-form-label-2" for="messageTema" style="font-size: 15px; color: black;">
                  Descreva o tema:
                </label>
                <textarea rows="6" name="tema" id="messageReche" class="formbold-form-input" placeholder="Ex: quero o bolo igual ao das meninas super poderosas"></textarea>
                <script src="../js/uloadoimg.js"></script>
              </div>
              <br><br>
            
              <div class="row mb-3 px-3">
                <button type="submit" class="formbold-btn add-cart" id="CadEvent" style="margin-top: 10px;">Prosseguir</button>
              </div>

            </div>
          </div>
          </form>

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
