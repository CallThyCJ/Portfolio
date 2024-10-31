document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    const xhr = new XMLHttpRequest();

    xhr.open("POST", "PHP/Functionality/sendMessage.php", true);
    xhr.setRequestHeader("Accept", "application/json");

    xhr.onload = function() {
        // WEB STATUS IS OKAY
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            const formInputs = document.getElementsByClassName("formInput");
            formInputsArray = Array.from(formInputs);

            formInputsArray.forEach(input => {
                input.classList.remove("error");
                input.classList.remove("success");
            })

            // no server side errors
            if (response.status === "success") {
                const successMessage = document.getElementById("submitSuccess");

                successMessage.classList.add("success");
                formInputsArray.forEach(input => {
                    input.classList.add("success");
                    input.value = "";
                })
                console.log(successMessage.classList);
                console.log(response.message);

                // try to display more specific validation error              
            } else if (response.status === "error") {
                if (response.errors) {
                    response.errors.forEach(error => {
                        formInputsArray.forEach(input => {
                            if (input.name === error.field) {
                                input.classList.add("error");
                            }
                        })
                    })
                    
                    console.log("Errors:\n" + response.errors.map(e => e.message).join("\n"));

                } else {
                    console.log(response.message);
                }
            }

            // if web status is not okay then print web status message
        } else {
            console.log("Error:" + xhr.status);
        }
    };

    xhr.send(formData);
});