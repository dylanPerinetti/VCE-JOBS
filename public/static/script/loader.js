const loader_text = document.querySelector('.loader-text');

window.addEventListener('load', () => {
    loader_text.style.display = "block";
    loader_text.classList.add('fondu-out');
    loader_text.style.display = "none";
});
 
