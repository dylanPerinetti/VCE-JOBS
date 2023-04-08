// Ouvrir la boîte de recherche en plein écran
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

// Fermer la boîte de recherche plein écran
function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}

// Lorsque l'utilisateur clique n'importe où en dehors de la fenêtre myOverlay, la fermer.
window.onclick = function(event) {
  if (event.target == myOverlay) {
    myOverlay.style.display = "none";
  }
}

// Fonction de recheche dans un tableau
function mainSearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}