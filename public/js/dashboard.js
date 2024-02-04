
fetch('/api/data')
.then(response => response.json())
.then(data => {
  // Generate HTML content based on the received data
  const dataList = document.getElementById('dataList');
  data.forEach(item => {
    const listItem = document.createElement('li');
    listItem.textContent = item.name;
    dataList.appendChild(listItem);
  });
})
.catch(error => console.error('Error fetching data:', error));



const popupButton = document.getElementById('popupButton');
const popup = document.getElementById('popup');
const closeButton = document.getElementById('closeButton');
const overlay = document.getElementById('overlay');

popupButton.addEventListener('click', () => {
popup.style.display = 'block';
overlay.style.display = 'block';


setTimeout(() => {
  overlay.style.opacity = 1;
  popup.style.opacity = 1;
  popup.style.transform = 'translate(-50%, -50%) scale(1)';
}, 10);
});

closeButton.addEventListener('click', () => {
overlay.style.opacity = 0;
popup.style.opacity = 0;
popup.style.transform = 'translate(-50%, -50%) scale(0.8)';


setTimeout(() => {
  popup.style.display = 'none';
  overlay.style.display = 'none';
}, 300); 
});