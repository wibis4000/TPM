const form = document.getElementById('multi-step-form');
const steps = document.querySelectorAll('.step-content');
const progressBar = document.getElementById('progress-bar');
let currentStep = 0;

function showStep(stepIndex) {
  steps[stepIndex].style.opacity = '1';
}

function hideStep(stepIndex) {
  steps[stepIndex].style.opacity = '0';
}

function nextStep() {
  hideStep(currentStep);
  currentStep = Math.min(currentStep + 1, steps.length - 1);
  showStep(currentStep);
  updateProgressBar();
}

function prevStep() {
  hideStep(currentStep);
  currentStep = Math.max(currentStep - 1, 0);
  showStep(currentStep);
  updateProgressBar();
}

function updateProgressBar() {
  const progress = (currentStep / (steps.length - 1)) * 100;
  progressBar.style.width = `${progress}%`;
}

// Show the first step initially
showStep(currentStep);


function togglePassword() {
  const passwordField = document.getElementById('password');
  const toggleButton = document.querySelector('.password-input .toggle-password');
  if (passwordField.type === 'password') {
    passwordField.type = 'text';
    toggleButton.textContent = 'Hide';
  } else {
    passwordField.type = 'password';
    toggleButton.textContent = 'Show';
  }
}

function toggleConfirmPassword() {
  const confirmPasswordField = document.getElementById('confirmPassword');
  const toggleButton = document.querySelector('.confirm-password-input .toggle-password');

  if (confirmPasswordField.type === 'password') {
    confirmPasswordField.type = 'text';
    toggleButton.textContent = 'Hide';
  } else {
    confirmPasswordField.type = 'password';
    toggleButton.textContent = 'Show';
  }
}

// Event listener for the confirm password toggle button
document.querySelector('.confirm-password-input .toggle-password').addEventListener('click', toggleConfirmPassword);
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('toggle-password').addEventListener('click', togglePassword);
  document.getElementById('toggle-confirm-password').addEventListener('click', toggleConfirmPassword);
});




let selectedOption = ''; // Variable to store the selected option

function selectOption(option) {
  const binusianButton = document.getElementById('binusian');
  const nonBinusianButton = document.getElementById('nonBinusian');

  if (option === 'binusian') {
    selectedOption = 'binusian';
    binusianButton.classList.add('selected');
    nonBinusianButton.classList.remove('selected');
  } else {
    selectedOption = 'nonBinusian';
    nonBinusianButton.classList.add('selected');
    binusianButton.classList.remove('selected');
  }
}


document.addEventListener('DOMContentLoaded', function() {
  const binusianButton = document.getElementById('binusian');
  const nonBinusianButton = document.getElementById('nonBinusian');

  binusianButton.addEventListener('click', function() {
    selectOption('binusian');
  });

  nonBinusianButton.addEventListener('click', function() {
    selectOption('nonBinusian');
  });
});




document.addEventListener('DOMContentLoaded', function() {
  const binusianButton = document.getElementById('binusian');
  const nonBinusianButton = document.getElementById('nonBinusian');

  binusianButton.addEventListener('click', function() {
    selectOption('binusian');
  });

  nonBinusianButton.addEventListener('click', function() {
    selectOption('nonBinusian');
  });
});

const passwordField = document.getElementById('password');
const confirmPasswordField = document.getElementById('confirmPassword');
const errorMessages = document.getElementById('error-messages');


function validatePassword(password) {
  const minLength = 8;
  const hasUpperCase = /[A-Z]/.test(password);
  const hasLowerCase = /[a-z]/.test(password);
  const hasNumber = /\d/.test(password);
  const hasSymbol = /[^A-Za-z0-9]/.test(password);

  return (
    password.length >= minLength &&
    hasUpperCase &&
    hasLowerCase &&
    hasNumber &&
    hasSymbol
  );
}

// Function to show error message
function showError(message) {
  errorMessages.textContent = message;
}

// Function to clear error message
function clearError() {
  errorMessages.textContent = '';
}

// Event listener for password input
passwordField.addEventListener('input', function() {
  const password = passwordField.value;
  if (!validatePassword(password)) {
    showError('Password does not meet the requirements.');
  } else {
    clearError();
  }
});

// Event listener for confirm password input
confirmPasswordField.addEventListener('input', function() {
  const confirmPassword = confirmPasswordField.value;
  const password = passwordField.value;
  if (confirmPassword !== password) {
    showError('Passwords do not match.');
  } else {
    clearError();
  }
});





