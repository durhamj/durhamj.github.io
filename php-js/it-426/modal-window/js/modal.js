// Modal button
var openModal = document.getElementById('open-modal');

// Modal ID
var modal = document.getElementById('modal-window');

// Close modal button
var closeModal = document.getElementsByClassName('close-modal')[0];

// Open modal event listener
openModal.addEventListener('click', function(){
    modal.classList.toggle('visible');
});

// Close modal event listener
closeModal.addEventListener('click', function(){
    modal.classList.remove('visible');
});

// Modal button 2
var openModal2 = document.getElementById('open-modal-2');

// Modal ID 2
var modal2 = document.getElementById('modal-window-2');

// Close modal button 2
var closeModal2 = document.getElementsByClassName('close-modal-2')[0];

// Open modal event listener 2
openModal2.addEventListener('click', function(){
    modal2.classList.toggle('visible');
});

// Close modal event listener 2
closeModal2.addEventListener('click', function(){
    modal2.classList.remove('visible');
});