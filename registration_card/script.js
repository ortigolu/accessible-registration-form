const registrationForm = document.getElementById("registrationForm");

function handleSubmit(e) {
    e.preventDefault();

    let isValid = false;
    const elements = Array.from(e.srcElement).slice(0, 6);

    elements.every((el) => {
        isValid = validateFormFieldOnInput(el);
        if (isValid) {
            return true;
        } else {
            isValid = false;
            return false;
        }
    });

    if (isValid && isValidGender()) {
        isValid = true;
    } else {
        isValid = false;
    }

    if (isValid) {
        //Extract from data
        const form = e.target;
        const formData = new FormData(form); // Gethers all form input data

        //Convert formData to JSON Object
        const data = Object.fromEntries(formData.entries());
        console.log("Success", data);
        // Do something with this data;

        // fetch('https://example.com/api/register', {
        //     method: 'POST',
        //     headers: {
        //         'Content-Type': 'application/json'
        //     },
        //     body: JSON.stringify(formObject)
        // })
    }
}

function handleValidateRegistrationForm(e) {
    e.preventDefault();

    const input = e.target;

    const inputsId = [
        "#fullname",
        "#username",
        "#email",
        "#phoneNumber",
        "#password",
        "#confirmPassword"
    ];

    inputsId.forEach((id) => {
        if (input.matches(id)) {
            validateFormFieldOnInput(input);
        }
    });

    if (input.type === "radio") {
        isValidGender(input);
        console.log(input.checked);
    }
}

function validateFormFieldOnInput(input) {
    const fieldId = input.getAttribute("id");

    switch (fieldId) {
        case "fullname":
            return validateField(
                input,
                validateNotEmpty,
                "Full Name is required"
            );

        case "username":
            return validateField(
                input,
                validateMinLength(5),
                "Must be at least 5 characters"
            );

        case "email":
            return validateField(input, validateEmail, "Invalid email format");

        case "phoneNumber":
            return validateField(
                input,
                validatePhone,
                "Phone number must be 11 digits"
            );

        case "password":
            return validateField(
                input,
                validateMinLength(6),
                "Must be at least 6 characters"
            );

        case "confirmPassword":
            const password = document.getElementById("password").value;
            if (password.length < 6) {
                return false;
            }
            return validateField(
                input,
                validatePasswordMatch(password),
                "Passwords do not match"
            );
    }
}

// Validate individual field
function validateField(input, validator, message) {
    if (!validator(input.value)) {
        showError(input, message);
        return false;
    } else {
        hideError(input);
        return true;
    }
}

// Utility to display error messages
function showError(input, message) {
    const errorMessage = input.parentElement.querySelector(".error-message");
    errorMessage.textContent = message;
    input.classList.add("invalid");
}

// Utility to hide error messages
function hideError(input) {
    const errorMessage = input.parentElement.querySelector(".error-message");
    errorMessage.textContent = "";
    input.classList.remove("invalid");
}

//Validation functions
function validateNotEmpty(value) {
    return value.trim() !== ""; //has input data true, blank input false
}

function validateMinLength(minLength) {
    return function (value) {
        return value.length >= minLength;
    };
}

function validateEmail(value) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(value).toLowerCase());
}

function validatePhone(value) {
    return /^\d{11}$/.test(value);
}

function validatePasswordMatch(password) {
    return function (confirmPassword) {
        return password === confirmPassword;
    };
}

function isValidGender(gender = null) {
    const genders = document.querySelectorAll(".reg__form-gender");
    const genderOptions = document.querySelector(".gender-options");

    let selectedGender;

    if (!gender) {
        selectedGender = Array.from(genders).find((g) => {
            return g.checked;
        });
    } else {
        selectedGender = Array.from(genders).find((g) => g === gender);
    }

    if (selectedGender) {
        showError(genderOptions, "");
        genders.forEach((gender) => gender.classList.remove("invalid"));
        return true;
    } else {
        showError(genderOptions, "Please select a gender");
        genders.forEach((gender) => gender.classList.add("invalid"));
        return false;
    }
}

registrationForm.addEventListener("focusout", handleValidateRegistrationForm);
registrationForm.addEventListener("input", handleValidateRegistrationForm);
registrationForm.addEventListener("submit", handleSubmit);
