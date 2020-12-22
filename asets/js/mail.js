jQuery(document).ready(function () {
    "use script";
    var mailBtn = $("#sendMail");
    mailBtn.on("click", function () {
        var name = $("#name").val().trim();
        var phone = $("#phone").val().trim(),
            intRegex =  /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/;
        var email = $("#email").val().trim(),
            emailReg = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;
        var message = $("#message").val().trim();
        if (name.length < 3 ) {
            var nameError = $("#errorName").text();
            $("#errorText").text(nameError);
            return false;
        }else if (!emailReg.test(email) || email == '') {
            var mailError = $("#errorEmail").text();
            $("#errorText").text(mailError);
            return false;
        }else if ((phone.length < 6) || (!intRegex.test(phone)) ) {
            var phoneError = $("#errorPhone").text();
            $("#errorText").text(phoneError);
            return false;
        }else if (message.length < 10 ) {
            var messageError = $("#errorMessage").text();
            $("#errorText").text(messageError);
            return false;
        }
        $("#errorText").text("");
        $.ajax({
            url: '../php/mail.php',
            type: 'POST',
            cache: false,
            data: {'name': name, 'phone': phone, 'email': email, 'message': message},
            dataType: 'html',
            beforeSend: function () {
                mailBtn.prop("disabled", true);
            },
            success: function (data) {
                if(!data)
                    alert("Щось не так ... Спробуйте ще раз!");
                else
                    $("#contactForm").trigger("reset");
                alert(data);
                mailBtn.prop("disabled", false);
            }
        });
    });
});