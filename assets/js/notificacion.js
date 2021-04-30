
//////////LONG POLLING AJAX ///////////////////


   const ruta = "http://localhost/solimaq/public/index.php/Notificaciones/obtener_notificaciones";


    (function poll(){

        /*data = {
            envio: 1232
          }*/
        
        $.ajax({
            url: ruta,
            type: "POST",
            //data: data,
            success: function(data){
                console.log(data);

                let html = '';
                let i;
                let num =  data.length;
               
                

               for (i = 0; i < data.length; i++) {
                   
                   html +=
                        '<a href="" class="media-list-link read" id="colorcambio">'+
                            '<div class="media pd-x-20 pd-y-15">'+
                                '<img src="../../assets/img/solimaq.png" class="wd-40 rounded-circle" alt="">'+
                                    '<div class="media-body">'+
                                        '<p class="tx-13 mg-b-0 tx-gray-700">'+ '<strong class="tx-medium tx-gray-800">' + data[i].Tipo+ '<br>'+'</strong>' + data[i].Mensaje+data[i].user_name+'</p>'+
                                            '<span class="tx-12">'+data[i].date+'</span>'+
                                    '</div>'+
                            '</div>'+
                        '</a>';
                }

                $('#ajxnoti').html(html);
                $("#numnotificacion").empty();
                $("#numnotificacion").append('('+num+')');
               // $("#colorcambio").css("background-color", color); 

            
            },
            dataType: "json",
           complete: function () {
                setTimeout(poll, 60000);
            },
            timeout: 60000
        });
    })();


    ////////////FUNCION DE CAMBIO DE ESTADO /////////

    

        $("#btnRightMenu").on("click", function() {
            const ruta2 = "http://localhost/solimaq/public/index.php/Notificaciones/update_notificacion";

              data = {envio: 1}

            $.ajax({
                type: "POST",
                url: ruta2,
                dataType: "JSON",
                data: data,
                success: function() {
                    alert("exitoso");
        
                },
              });

           
        });
    
      

    


    
