const firstName = document.getElementById("formFirstName");
const lastName = document.getElementById("formLastName");
const email = document.getElementById("formEmail");
const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


// check which option is invalid add invalid styling
function invalid () {
    if (firstName.value == "") {
        firstName.style.borderColor = "red";
        const invalidFirstName = document.getElementById("invalidFirstName");
        invalidFirstName.innerHTML = '<i class="fa-solid fa-circle-exclamation"></i> Please enter your first name';
    }

    if (lastName.value == "") {
        lastName.style.borderColor = "red";
        const invalidLastName = document.getElementById("invalidLastName");
        invalidLastName.innerHTML = '<i class="fa-solid fa-circle-exclamation"></i> Please enter your last name';
    }

    if (email.value == "" || != email.value.includes(emailRegex)); {
        email.style.borderColor = "red";
        const invalidEmail = document.getElementById("invalidEmail");
        invalidEmail.innerHTML = '<i class="fa-solid fa-circle-exclamation"></i> Please enter a valid email';
    }
}

//Clear the invalid state for all inputs when button is pressed again
function resetInvalid() {
    firstName.style.borderColor = "";
    const invalidFirstName = document.getElementById("invalidFirstName");
    invalidFirstName.innerHTML = "";

    lastName.style.borderColor = "";
    const invalidLastName = document.getElementById("invalidLastName");
    invalidLastName.innerHTML = "";

    email.style.borderColor = "";
    const invalidEmail = document.getElementById("invalidEmail");
    invalidEmail.innerHTML = "";
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