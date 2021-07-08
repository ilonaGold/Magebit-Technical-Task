const agree = document.getElementById("submissionForm-checkbox-input");
const email = document.getElementById("submissionForm-email-input");
const subscribe = document.getElementById("submissionForm-submit-button");

const errMsg = document.getElementById("error-message");

const successIcon = document.getElementById("success-icon");
const thanksMsg = document.getElementById("heading");
const discountText = document.getElementById("subheading");
const form = document.getElementById("submissionForm");

subscribe.addEventListener("click", (e) => {
    e.preventDefault();
    checkInputs();
});

function displayError(hintMsg) {
    errMsg.textContent = hintMsg;
    errMsg.style.visibility = "visible";
    email.style.border = "2px solid #E74C3C";
}

function checkInputs() {

    const emailValue = email.value.trim();
    const isEmailValid = isEmail(emailValue);
    
    if (!agree.checked) {
        displayError("You must accept the terms and conditions");
        return
    }
    
    if (emailValue.length === 0) { 
        displayError("Email address is required");
    } else if (!isEmailValid) { 
        displayError("Please provide a valid e-mail address");
    } else if (emailValue.slice(-2) === "co") { 
        displayError("We are not accepting subscriptions from Colombia emails");
    } else {
        successIcon.style.visibility = "visible"; 
        thanksMsg.textContent = "Thank you for subscribing!";
        discountText.textContent = "You have successfully subscribed to our email listing. Check your email for the discount code.";
        form.style.display = "none";
    }
}

function isEmail(email) {
    
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
