// Obtenir la fenêtre login
var login = document.getElementById('id01');


// Lorsque l'utilisateur clique n'importe où en dehors de la fenêtre login, la fermer.
window.onclick = function(event) {
  if (event.target == login) {
    login.style.display = "none";
  }
}
  
