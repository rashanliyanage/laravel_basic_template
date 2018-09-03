
$(document).ready(function () {
    $("#add-property-button").click(function (e) {
         e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('#_token').val()
            }
        });
        var formdata = new FormData();
        formdata.append("data",$("#formadd-property"));
        formdata.append("image", $('input[type=file]')[0].files[0]);
        formdata.append("email",$("#email").val());
        formdata.append("txtname",$("#txtname").val());
        console.log();

        jQuery.ajax({
            url: 'upload-property',
            method: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            beforeSend: function (xhr) {
                console.log('hello');

            },
            success: function (respond) {
                console.log(respond);
            },
            // Event complete
            complete: function (jqXHR, textStatus) {

            }
        });

    });
});








