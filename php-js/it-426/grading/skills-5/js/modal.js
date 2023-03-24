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


// Add Code Below for Second Modal Window Instructions

// Modal button 2

var openModal2 = document.getElemenById('open-modal-2');

var modal2 = document.getElementById('modal-window-2')

var closeModal2 = document.getElementByClassName('close-modal-2')[0];

//open modal event listener 2
openModal.addEventListener('click', function(){
    modal.classList.toggle('visible');
});
//close event listener 2
closeModal.addEventListener('click', function(){
    modal.classList.remove('visible');
});

