
let newsButtonContainer = 
document.getElementById('news-list-container-mobile');

let modal = document.getElementsByClassName('modal-background');
let close = document.getElementsByClassName('close');
let modalId = document.getElementById('modal-background');
let closeId = document.getElementById('close');
let menu = document.getElementById('hamburger');

function openNav() {
    newsButtonContainer.classList.add('open-news-categories-mobile');
    modalId.classList.add('modal-background');
    closeId.classList.add('close');
    menu.style.color = 'rgba(255, 255, 255, 0.9)';
};

function closeNav() {
  newsButtonContainer.classList.remove('open-news-categories-mobile');
  modalId.classList.remove('modal-background');
  closeId.classList.remove('close');
  menu.style.color = '#2201f9';
};
