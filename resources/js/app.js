const title = document.getElementById('upTitle');
const file = document.getElementById('upFile').value;
const type = document.getElementById('upFileType').value;
const form = document.getElementById('upForm');

form.addEventListener('submit', (e) => {
    if (title.value == "") {
        title.style.backgroundColor('#A20013');
        e.preventDefault();
    }
});

validate = function (event) {

    let title = document.getElementById('upTitle');
    let file = document.getElementById('upFile').value;
    let type = document.getElementById('upFileType').value;

    if (title.value == "") {
        title.style.backgroundColor('#A20013');
        event.preventDefault();
    }
}