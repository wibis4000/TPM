function submitLog() {
    // Code to send form data to the server
    // You can use AJAX or fetch for this purpose

    // Assuming the form is successfully submitted, show the popup
    showPopup();
  }

  function showPopup() {
    const popup = document.getElementById('popup');
    const overlay = document.createElement('div');
    overlay.classList.add('overlay');
    document.body.appendChild(overlay);

    setTimeout(() => {
      popup.style.display = 'block';
      overlay.style.display = 'block';

      // Use a small delay to ensure styles are applied before transitioning
      setTimeout(() => {
        overlay.style.opacity = 0.5; // Adjust the opacity as needed
        popup.style.opacity = 1;
        popup.style.transform = 'translate(-50%, -50%)';
      }, 10);
    }, 10);
  }

  function returnToDashboard() {
    // Code to handle redirection to the dashboard
    window.location.href = '/login/dashboard/dashboard.html';
  }