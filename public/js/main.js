
var $ = jQuery.noConflict();
$(document).ready(function () {

    $("#add-property-button").click(function (e) {
         e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('#_token').val()
            }
        });
                console.log( $('input[type=file]')[0].files);

        var formdata = new FormData();

        var files =$('input[type=file]')[0].files;
        console.log(files.length);

        for(var i=0;i<files.length;i++){
            formdata.append("images[]", files[i], files[i]['name']);

        }

         // formdata.append("images", $('input[type=file]')[0].files);
        formdata.append("property_type",$('#property_type').val());
        formdata.append("location",$("#txtlocation").val());
        formdata.append("rooms",$("#txtrooms").val());
        formdata.append("landsize",$("#txtlandsize").val());
        formdata.append("bathsize",$("#txtbathsize").val());
        formdata.append("housesize",$("#txthousesize").val());
        formdata.append("address",$("#txtaddress").val());
        formdata.append("description",$("#txtdescription").val());
        formdata.append("cost",$("#txtcost").val());
        formdata.append("is_negotiable",$("#is_negotiable").val());
        formdata.append("name",$("#txtname").val());
        formdata.append("phone",$("#txtphone").val());
        formdata.append("email",$("#txtemail").val());
        formdata.append("_token",$('#_token').val());
        console.log(formdata);

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
            error: function(data) {
                console.log(data.responseJSON.errors);

            },
            // Event complete
            complete: function (jqXHR, textStatus) {

            }
        });

    });



    $("#submit-new-role").click(function (e){
        e.preventDefault();

        console.log( $('#add-new-role').serialize());

        jQuery.ajax({
            url: 'create-new-role',
            method: 'POST',
            data: $('#add-new-role').serialize(),
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

    $('#upload-multiple-images').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });

    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {

            var filesAmount = input.files.length;
            console.log(filesAmount);

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).addClass("img-thumbnail inline").width(100).height(100);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };




});








