const firstName = document.getElementById("formFirstName");
const lastName = document.getElementById("formLastName");
const email = document.getElementById("formEmail");
const message = document.getElementById("messageBox");
const submitButton = document.getElementById("formSubmit");
const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


// check which option is invalid add invalid styling
function invalid () {
    if (firstName.value == "") {
        firstName.classList.add("error");
        const invalidFirstName = document.getElementById("invalidFirstName");
        invalidFirstName.innerHTML = '<i class="fa-solid fa-circle-exclamation"></i> Please enter your first name';
    }

    if (lastName.value == "") {
        lastName.classList.add("error");
        const invalidLastName = document.getElementById("invalidLastName");
        invalidLastName.innerHTML = '<i class="fa-solid fa-circle-exclamation"></i> Please enter your last name';
    }

    if (email.value == "" || !emailRegex.test(email.value)) {
        email.classList.add("error");
        const invalidEmail = document.getElementById("invalidEmail");
        invalidEmail.innerHTML = '<i class="fa-solid fa-circle-exclamation"></i> Please enter a valid email';
    }

    if (message.value == "") {
        message.classList.add("error");
    }
}

//Clear the invalid state for all inputs when button is pressed again
function resetInvalid() {
    firstName.classList.remove("error");
    const invalidFirstName = document.getElementById("invalidFirstName");
    invalidFirstName.innerHTML = "";

    lastName.classList.remove("error");
    const invalidLastName = document.getElementById("invalidLastName");
    invalidLastName.innerHTML = "";

    email.classList.remove("error");
    const invalidEmail = document.getElementById("invalidEmail");
    invalidEmail.innerHTML = "";

    message.classList.remove("error");
}


// if any required values are blank then form doesn't submit
function validate () {
    resetInvalid();

    if (firstName.value == "" || lastName.value == "" || email.value == "") {
        // functionality to disable form from submitting
        invalid();
        return false;
    } else {
        return true;
    }
}

submitButton.addEventListener("click", validate);