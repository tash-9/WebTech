// Get form element
const form = document.querySelector("form");

// Get inputs
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const phoneInput = document.getElementById("phone");
const messageInput = document.getElementById("message");

// Create error message elements (DOM)
const nameError = document.createElement("p");
const emailError = document.createElement("p");
const phoneError = document.createElement("p");
const messageError = document.createElement("p");

// Add error styles
[nameError, emailError, phoneError, messageError].forEach(err => {
  err.style.color = "red";
  err.style.fontSize = "12px";
});

// Insert error messages into DOM
nameInput.insertAdjacentElement("afterend", nameError);
emailInput.insertAdjacentElement("afterend", emailError);
phoneInput.insertAdjacentElement("afterend", phoneError);
messageInput.insertAdjacentElement("afterend", messageError);

// Form submit event
form.addEventListener("submit", function (e) {
  e.preventDefault();

  let isValid = true;

  // Reset errors
  nameError.textContent = "";
  emailError.textContent = "";
  phoneError.textContent = "";
  messageError.textContent = "";

  // Name validation
  if (nameInput.value.trim() === "") {
    nameError.textContent = "Name is required";
    isValid = false;
  }

  // Email validation
  if (emailInput.value.trim() === "") {
    emailError.textContent = "Email is required";
    isValid = false;
  } else if (!emailInput.value.includes("@")) {
    emailError.textContent = "Enter a valid email";
    isValid = false;
  }

  // Phone validation (optional but if filled must be valid)
  if (phoneInput.value !== "" && !/^[0-9]{11}$/.test(phoneInput.value)) {
    phoneError.textContent = "Phone must be 11 digits";
    isValid = false;
  }

  // Message validation
  if (messageInput.value.trim() === "") {
    messageError.textContent = "Message is required";
    isValid = false;
  }

  // If valid → show success message using DOM
  if (isValid) {
    alert("Form submitted successfully!");

    // Reset form
    form.reset();
  }
});