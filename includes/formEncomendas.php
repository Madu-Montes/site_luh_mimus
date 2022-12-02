<form class="forms-tot" method="POST" action="../php/encomendar.php " enctype="multipart/form-data">
        
        <label for="qusOne" class="formbold-form-label">Peso:</label>
        <input type="number" name="peso" id="qtd_encomendas">

        <br>
          
        <div class="mb-6 pt-4">
            <label class="formbold-form-label-2" for="messageTema" style="font-size: 30px; color: #ffb8c4;">
                Tema:
            </label>
            <script src="../js/uloadoimg.js"></script>
        </div>
        
        <textarea
          rows="6"
          name="tema"
          id="messageTema"
          class="formbold-form-input" placeholder="Descreva o Tema Para Decorar o Bolo"
        ></textarea>
        <br>
        
        <label class="formbold-form-label-2" for="messageTema" style="font-size: 30px; color: #ffb8c4;">
                Mande apenas uma imagem de referência:
        </label>
        <div class="drag-area" ondrop="upload_file(event)" ondragover="return false">
              
              <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
              <header>Arrastar Arquivo</header>
              <span>ou</span>
              <br>
              <label for="file">Procurar Arquivo</label>
              <input type="file" name="referencia" id="file" hidden accesskey="i">
              </div>
        

        <button type="submit" class="formbold-btn add-cart">Prosseguir</button>
    </form>