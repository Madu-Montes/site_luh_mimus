<h1 style="text-align: center; color: #ffb8c4; margin-bottom:90px;">Encomenda - Passo à Passo</h1>

<form id="forms" method="POST" action="#">
  <div id="paraLado">
          <br><br>
        <label for="qusOne" class="formbold-form-label">
            1º Passo - Quantidade
          </label>
  
          <div class="formbold-radio-flex">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="qusOne"
                  id="qusOne"
                />
                1KG
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="qusOne"
                  id="qusOne"
                />
                2KG
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="qusOne"
                  id="qusOne"
                />
                3KG
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="qusOne"
                  id="qusOne"
                />
                4Kg
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
          <br><br>

          <label for="qusTwo" class="formbold-form-label">
            2º Passo - Massa
          </label>
  
          <div class="formbold-radio-flex">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="qusTwo"
                  id="qusTwo"
                />
                Chocolate
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="qusTwo"
                  id="qusTwo"/>
                Baunilha
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
          <br><br>

          <label for="messageReche" class="formbold-form-label">
            3º Passo - Recheio
          </label>

          <textarea
          rows="6"
          name="message"
          id="messageReche"
          class="formbold-form-input" placeholder="Descreva o Recheio"
        ></textarea>

        <div class="mb-6 pt-4">
            
            <label class="formbold-form-label-2" for="messageTema" style="font-size: 30px; color: #ffb8c4;">
              4º Passo - Tema
            </label>
    
            <div class="drag-area" ondrop="upload_file(event)" ondragover="return false">
              
              <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
              <header>Arrastar Arquivo</header>
              <span>ou</span>
              <br>
              <label for="file">Procurar Arquivo</label>
              <button hidden>Browse File</button>
              <input type="file" name="file" id="file" hidden accesskey="i">
              </div>
          
            <script src="../js/uloadoimg.js"></script>
          
        </div>
        <br>
        <br>
        <textarea
          rows="6"
          name="message"
          id="messageTema"
          class="formbold-form-input" placeholder="Descreva o Tema Para Decorar o Bolo e/ou Mande uma unica imagem para Inspiração"
        ></textarea>
        <br><br>
        <label for="opcOne" class="formbold-form-label">
            5º Passo - Adicionais
          </label>
  
          <div class="formbold-radio-flex" style="display: block;">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="checkbox"
                  name="add"
                  id="opcOne"
                />
                Chantininho - Chantilly Leite Ninho
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="checkbox"
                  name="add"
                  id="opcTwo"
                />
                Bolo no acetato
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="checkbox"
                  name="add"
                  id="opcThree"
                />
                Ganache
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
          <br>
          <label for="messageReche" class="formbold-form-label">
            6º Passo - Agendar a  Encomenda
          </label>
          <div class="scroll-escondido">
          <iframe  src="../includes/calendario/calendario.php" id="frame-spec" scrolling="no">

</iframe>
</div>
<br>
<div id="alinhamento-centro">
          <button id="btn-form">Fazer Pedido</button>
</div>
</div>
<br>
<footer id="rodape">
            <div>
            <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2022. Luh Mimu’s.</small>
            </div>
            <div class="social-contact ml-4 ml-sm-auto">
                <span class="fa fa-facebook mr-4 text-sm" style="font-size: 40px;"></span>
                <span class="fa fa-instagram mr-4 text-sm"></span>
                <icon class="fa fa-whatsapp mr-4 mr-sm-5 text-sm"></icon>
            </div>
</footer>

    </form>  