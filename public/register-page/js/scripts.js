$(function(){

    $("#buttonRegister").on("click", (event) => {
        event.preventDefault();
    
        let formElement = document.getElementById("formRegister"); 
        let formData = new FormData(formElement);
        
        let formObject = {};
        formData.forEach((value, key) => {
            formObject[key] = value;
        });

        $.ajax({
            url: '/registrar',
            type: 'POST',
            data: formObject,
            success: function(response) {
                let responseJson = JSON.parse(response);
                $(".error-message").remove();

                if (responseJson.status === 'error') {
                    $.each(responseJson.errors, function(field, message) {
                        $(`[name="${field}"]`).after(`<p class="error-message" style="color:red;">${message}</p>`);
                    });
                }
            },
            error: function(xhr, status, error) {
                console.log('Erro na requisição AJAX: ', error);
            }
        });
    });

});