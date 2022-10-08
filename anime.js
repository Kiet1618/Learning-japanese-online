
// function handleDarkMode(e) {
//     var content = document.getElementById('content');
//     content.classList.add('dark')
// }

const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');
const quiz__group = document.querySelector('.quiz__group');
// const middle = document.querySelector('middle');
// const container = document.querySelector('container');
// const title = document.querySelector('title');
// const quiz__group = document.querySelector('.quiz__group');
const table = document.querySelector('.table');
const tableth = document.querySelectorAll('th');


toggle.addEventListener('click', function () {
    this.classList.toggle('bi-moon');
    if (this.classList.toggle('bi-brightness-high-fill')) {
        // body.classList.toggle('light');
        body.style.background = 'white';
        body.style.color = 'black';
        body.style.transition = '2s';
        quiz__group.style.background = 'white';
        quiz__group.style.color = 'black';
        quiz__group.style.transition = '2s';
        quiz__group.style.border = '1px solid #4c5c6c';

    } else {
        // body.classList.toggle('dark');

        body.style.background = 'black';
        body.style.color = 'white';
        body.style.transition = '2s';
        quiz__group.style.color = 'white';
        quiz__group.style.background = 'black';
        quiz__group.style.transition = '2s';
        quiz__group.style.border = '1px solid white';
        tableth.style.border.bottom = '1px solid white';
    };
});
