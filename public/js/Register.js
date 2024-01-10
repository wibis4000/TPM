let currentStep = 1;
const form = document.getElementById('multi-step-form');
const steps = document.getElementsByClassName('step-content');
const progressBar = document.getElementById('progress-bar');

function nextStep() {
  steps[currentStep - 1].style.display = 'none';
  currentStep = Math.min(currentStep + 1, steps.length);
  steps[currentStep - 1].style.display = 'block';
  updateProgressBar();
}

function prevStep() {
  steps[currentStep - 1].style.display = 'none';
  currentStep = Math.max(currentStep - 1, 1);
  steps[currentStep - 1].style.display = 'block';
  updateProgressBar();
}

function updateProgressBar() {
  const progress = ((currentStep - 1) / (steps.length - 1)) * 100;
  progressBar.style.width = `${progress}%`;
}