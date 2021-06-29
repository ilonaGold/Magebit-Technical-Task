

id="error-invalid-email"
id="error-tos"
id="error-no-email"
id="error-columbia"

function validateForm() {
    let x = document.forms["input"]["email"].value;
    if (x == "") {
      alert("Email address is required");
      return false;
    }
  }