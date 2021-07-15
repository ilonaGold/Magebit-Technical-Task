const agree = document.getElementById("submissionForm-checkbox-input");
const email = document.getElementById("submissionForm-email-input");
const arrow = document.getElementById("submissionForm-submission-button-path");
const subscribe = document.getElementById("submissionForm-submit-button");
const errMsg = document.getElementById("error-message");
const successIcon = document.getElementById("success-icon");
const thanksMsg = document.getElementById("heading");
const discountText = document.getElementById("subheading");
const form = document.getElementById("submissionForm");
const line = document.getElementById("line-content-divider");

form.addEventListener("submit", (e) => {
    e.preventDefault();
})

agree.addEventListener("change", (e) => {
    errMsg.textContent = "";
    checkInputs(email.value.trim().toLowerCase());
});

email.addEventListener("input", (e) => {
    checkInputs(email.value.trim().toLowerCase());
});

subscribe.addEventListener('click', ()=> { 
    successIcon.style.display = "block"; 
    thanksMsg.textContent = "Thanks for subscribing!";
    discountText.textContent = "You have successfully subscribed to our email listing. Check your email for the discount code.";
    form.style.display = "none";
    line.style.boxShadow = "none";
})

function displayError(hintMsg) {
    errMsg.textContent = hintMsg;
    errMsg.style.display = "block";
    email.style.border = "2px solid #E74C3C";
    subscribe.style.pointerEvents = "none";
    form.addEventListener("mouseover", function() {
        arrow.style.fill = "#E3E3E4";
    });
}

function checkInputs(emailValue) {
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
        subscribe.style.pointerEvents = "auto";
        errMsg.style.display = "none";
        email.style.border = "1px solid #E3E3E4";
        email.style.borderLeft = "4px solid #4066A5";
        form.addEventListener("mouseover", function() {
            arrow.style.fill = "#4066A5";
        });
    }
}

function isEmail(email) {
    return /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/.test(email);
}

