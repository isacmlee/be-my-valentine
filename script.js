const yesButton = document.getElementById('yesButton');
const noButton = document.getElementById('noButton');
const options = document.getElementById('options');

yesButton.addEventListener('click', () => {
    options.style.display = 'block';
});

noButton.addEventListener('click', () => {
    alert('Oh no! Maybe next year? 😢');
});