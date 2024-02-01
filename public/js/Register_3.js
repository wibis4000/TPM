// script.js

document.addEventListener('DOMContentLoaded', function () {
    console.log('Script loaded');

    const form = document.getElementById('multi-step-form');

    form.addEventListener('submit', function (event) {
      event.preventDefault();
      validateAndSubmit();
    });
  
    function validateAndSubmit() {
      const whatsappInput = document.getElementById('Whatssapp');
      const lineIDInput = document.getElementById('LineID');
      const githubIDInput = document.getElementById('GithubID');
  
      // Validate WhatsApp number
      if (whatsappInput.value.length < 9) {
        alert('WhatsApp number must be at least 9 characters');
        return;
      }
  
      // Validate LINE ID
      if (lineIDInput.value.trim() === '') {
        alert('LINE ID is required');
        return;
      }
  
      // Validate Github ID
      if (githubIDInput.value.trim() === '') {
        alert('Github ID is required');
        return;
      }
  
      // Check uniqueness (replace with your logic)
      if (!isUnique(whatsappInput.value, lineIDInput.value, githubIDInput.value)) {
        alert('WhatsApp number, LINE ID, or Github ID is not unique. Please choose different values.');
        return;
      }
  
      // If all validations pass, auto-login (replace with your login logic)
      alert('Form submitted successfully! Auto-Login...');
      // You can add your auto-login logic here
    }
  
    // Function to check uniqueness (replace with your logic)
    function isUnique(whatsapp, lineID, githubID) {
      // Replace this with your logic to check uniqueness
      // For example, you can maintain a list of used numbers and IDs and check against it
      return true;
    }
  });
  