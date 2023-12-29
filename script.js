document.addEventListener('DOMContentLoaded', function () {
    const openPopupButton = document.getElementById('openPopup');
    const closePopupButton = document.getElementById('closePopup');
    const popupContainer = document.getElementById('popup-container');
  
    openPopupButton.addEventListener('click', function () {
      popupContainer.style.display = 'block';
    });
  
    closePopupButton.addEventListener('click', function () {
      popupContainer.style.display = 'none';
    });
  
    const createButton = document.getElementById('createButton');
    createButton.addEventListener('click', function () {
      const title = document.getElementById('title').value;
      const description = document.getElementById('description').value;
  
      console.log('Título:', title);
      console.log('Descripción:', description);
  
      popupContainer.style.display = 'none';
    });
  });