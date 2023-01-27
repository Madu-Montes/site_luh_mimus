function openPage(){
    var answer = document.getElementById("search").value;
   let a1 = /bolos/i
   let b1 = /bolo encomenda/i
    if (a1.test(answer)  || b1.test(answer)){
        window.location.href = "./html/bolos.html";
        }

   let a2 = /doces/i
   let b2 = /doce encomenda/i
    if (a2.test(answer)  || b2.test(answer)){
        window.location.href = "./html/doces.html";
        }

   let a3 = /salgados/i
   let b3 = /encomenda salgados/i
   let c3 = /salgado/
    if (a3.test(answer)  || b3.test(answer) || c3.test(answer)){
        window.location.href = "./html/salgados.html";
        }

  let a4 = /kit festa/i
  let b4 = /kit aniversario/i
    if (a4.test(answer)  || b4.test(answer)){
        window.location.href = "./html/kitfesta.html";
        }

  let a6 = /quem somos/i
  let b6 = /sobre/i
    if (a6.test(answer)  || b6.test(answer)){
        window.location.href = "./html/quemsomos.html";
        }
  
  let a7 = /personalizados/i
  let b7 = /personalizdos/i
        if(a7.test(answer) || b7.test(answer)){
            window.location.href = "./html/personalizados.html"
        }

  let a8 = /contatos/i
  let b8 = /contato/i
        if(a8.test(answer) || b8.test(answer)){
            window.location.href = "./html/contato.html"
          }
  }
