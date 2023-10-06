$("#contact-form").unbind("submit").bind("submit", function() {

    let form = new FormData(this);
    console.log("Contact form data: ", form);

    $.ajax({
        url: "shared/mailer/mailController.php",
        type: "POST",
        data: {
            "data": form,
            "param": "contact"
        },
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success:function(response) {
            console.log("Success: ", response)
        },
        error: function(response) {
            console.log("Error: ", response)
        }
    });

    console.log("END");

    return false;

});

$("#survey-form").unbind("submit").bind("submit", function() {

    let form = new FormData(this);
    console.log("Career form data: ", form);

    $.ajax({
        url: "shared/mailer/mailController.php",
        type: "POST",
        data: {
            "data": form,
            "param": "career"
        },
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success:function(response) {
            console.log("Success: ", response)
        },
        error: function(response) {
            console.log("Error: ", response)
        }
    });

    console.log("END");

    return false;

});