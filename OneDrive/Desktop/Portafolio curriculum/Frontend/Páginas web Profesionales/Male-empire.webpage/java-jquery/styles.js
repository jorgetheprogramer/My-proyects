$(document).ready(function () {


    //PLAZAS DE MENTORIA ANUAL ACABADAS
    {
        $(".bottom-box__btn").click(function(event){
            event.preventDefault();

            // Verificar si el párrafo ya existe
            if ($(".bottom-box__tittle p.mentoria-msg").length === 0) {
                var parrafo = $("<p class='mentoria-msg'>" + "*Todas las plazas están ocupadas" + "</p>");
                parrafo.css({
                    "color": "red",
                    "margin-top": "1rem",
                    "font-size": "1rem"
                });
                $(".bottom-box__tittle").append(parrafo);
            }
        });
    

      

    }

    //DIALOGO DE APRENDER MAS
    {  
        $(".section-2__btn-1").click(function(event){
        event.preventDefault();
        $("#dialog__alert").dialog()
    })
    }

    //INTROUZCA SU EMAIL
    {
        $(".section-4__btn").click(function(e){
            e.preventDefault()
          var email=  $(".section-4__text-input").val()

          localStorage.setItem("Email",JSON.stringify(email))
        })
    }




})