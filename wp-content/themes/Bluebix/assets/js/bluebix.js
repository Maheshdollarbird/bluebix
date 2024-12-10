// if ($(".formValidation").length) {
//     $(".formValidation")
//       .bootstrapValidator({
//         feedbackIcons: {
//           valid: "glyphicon glyphicon-ok",
//           invalid: "form-remove",
//           validating: "glyphicon glyphicon-refresh",
//         },
//       })
//       .on("success.form.bv", function (e) {

//       });
//     }
if ($(".formValidation").length) {
    $(".formValidation")
        .bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "form-remove",
                validating: "glyphicon glyphicon-refresh",
            },
        })
        .on("success.form.bv", function (e) {
            // Prevent default form submission
            e.preventDefault();

            // Let Contact Form 7 handle the submission
            const form = $(e.target);

            // Trigger Contact Form 7 submission
            form.find("button[type='submit']").click();

            // Listen for Contact Form 7 success event
            document.addEventListener(
                "wpcf7mailsent",
                function (event) {
                    // Show the success message in the response output div
                    const responseOutput = form.find(".wpcf7-response-output");
                    responseOutput
                        .html('<div class="thank-you-message">Thank you for your submission!</div>')
                        .removeClass('hidden')
                        .show();  

                    // Clear the form after submission
                    form[0].reset();

                    // Remove the Thank You message after a few seconds
                    setTimeout(function () {
                        responseOutput.fadeOut(300, function () {
                            $(this).html('').hide();  // Clear and hide the message
                        });
                    }, 3000);
                },
                { once: true } 
            );
        });
}