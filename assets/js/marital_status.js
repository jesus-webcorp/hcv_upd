$(document).ready(function() {
    $('.btn-update').on('click', function() {
        let id_buton = $(this).attr('id');
        $('#id_payment').val(id_buton);
        let json = {
            id: id_buton
        };
        $.ajax({
            url: '<?php echo base_url().'/Payments/get_data_json'?>',
            type: "POST",
            data: json,
            dataType: "JSON",
            success: function(success) {
                console.log(success);
                $('#update_name').val(success[0].name);
                $('#update_descripcion').val(success[0].description);
            }

        }); //AJAX

        $('#modal_update').modal('show');
    });

    $("#submit_form_new").on('click', function(){
        var url_str = '<?=base_url().'/Hcv_Rest_marital_Status/create'?>';
        var loginForm = $("#create_form").serializeArray();
        var loginFormObject = {};
        $.each(loginForm,
            function(i, v) {
                loginFormObject[v.name] = v.value;
            }
        );
        // send ajax
        $.ajax({
            url: url_str, // url where to submit the request
            type : "POST", // type of action POST || GET
            dataType : 'text', // data type
            data : JSON.stringify( loginFormObject ), // post data || get data
            success : function(result) {
                // you can see the result from the console
                // tab of the developer tools
                console.log(result);
                alert('Exito');
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
                alert(xhr + resp + text);
            }
        })
    });
});//Ready function

$('#datatable1').DataTable({
    responsive: true,
    language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ items/page',
    }
});

$('.btn-danger').on('click', function() {

    let id = $(this).attr('id');
    $('#id_delete').val(id);
    $('#modal_delete').modal('show');

});

$('.btn-danger').on('click', function() {

    let id = $(this).attr('id');
    $('#id_delete').val(id);
    $('#modal_delete').modal('show');

});