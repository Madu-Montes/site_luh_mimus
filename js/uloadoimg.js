jQuery(document).ready(function($) {
    $('.upload-area').on('dragover', function(event){
        event.preventDefault();
        event.stopPropagation();
        $(this).addClass('upload-area-hover');
    })
    $('.upload-area').on('dragleave', function(event){
        event.preventDefault();
        event.stopPropagation();
        $(this).removeClass('upload-area-hover');
    })
    $('.upload-area').on('drop', function(event){
        event.preventDefault();
        event.stopPropagation();
        $(this).removeClass('upload-area-hover');
        var data = new FormData();
        var files = event.originalEvent.dataTransfer.files;
        for(var i=0; i<files.length; i++){
            data.append('file[]',files[i]);
        }
      
        $.ajax({
            url:'../php/upload.php',
            method:'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success:function(result){
                $('#uploaded-files').html(result);
            }
        })
    })
    $('#file').on('load',  function(event){
        event.preventDefault();
        event.stopPropagation();
        $(this).removeClass('upload-area-hover');
        var data = new FormData();
        var files = event.originalEvent.dataTransfer.files;
        var otfile = document.getElementById('file')
        for(var i=0; i<files.length; i++){
            data.append('file[]',files[i]);
        }
      
        $.ajax({
            url:'../php/upload.php',
            method:'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success:function(result){
                $('#blah').html(result);
            }
        })
    })
    
})

function leUrl(input) {
    if (input.files && input.files[0]) { //verifica se o arquivo não está nulo
        var reader = new FileReader(); //instancia um objeto FileReader que permite aplicações web ler o conteúdo dos arquivos (ou buffers de dados puros)

        reader.onload = function (e) { //Este evento é chamado cada vez que a operação de leitura é completada com sucesso.
            $('#blah').attr('src', e.target.result); //aqui seto a imagem no src da div a cima
        }

        reader.readAsDataURL(input.files[0]); //Inicia a leitura do conteúdo que caira após o peração completar na função a cima
    }
}

$("#file").change(function () { //aqui seto a função no evento de change do campo
    leUrl(this);
});