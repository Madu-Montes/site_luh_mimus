pagamento();

function pagamento(){
    var endereco = jQuery('.endereco').attr("data-endereco");

    $.ajax({
        url: endereco + "pagamento.php",
        type: 'POST',
        dataType: 'json',
            success: function(response){
                PagSeguroDirectPayment.setSessionId(response.id);
            },

            complete: function(response) {
                listarMeiosPag()
            }
    });
}

function listarMeiosPag() {
    PagSeguroDirectPayment.getPaymentMethods({
        amount: 500.00,
        success: function(response) {
            $('.meio-pag').append("<div>Cartões de Crédito</div>");
            $.each(response.paymentMethods.CREDIT_CARD.options, function(i, obj){
                //NOME = $('.meio-pag').append("<span>" + obj.name +"</span>");
                //NOME +BANDEIRA = $('.meio-pag').append("<span><img src='https://stc.pagseguro.uol.com.br" + obj.images.SMALL.path +"</span>");
                //BANDEIRA
                $('.meio-pag').append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + obj.images.SMALL.path+"'></span>");

            });
                
            //bandeira boleto
            $('.meio-pag').append("<div>Boleto</div>");
            $('.meio-pag').append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + response.paymentMethods.BOLETO.options.BOLETO.images.SMALL.path + "'></span>")
                  
        },
        error: function(response) {
            // Callback para chamadas que falharam.
        },
        complete: function(response) {
            // Callback para todas chamadas.
        }
    });
}

$('#numCartao').on('keyup', function(){
    var numCartao = $(this).val();
    PagSeguroDirectPayment.getBrand({
        cardBin: numCartao,
        success: function(response) {
          $('.bandeira-cartao')
        },
        error: function(response) {
          //tratamento do erro
        },
        complete: function(response) {
          //tratamento comum para todas chamadas
        }
    });
});