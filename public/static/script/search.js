// Lorsque l'utilisateur clique n'importe où en dehors de la fenêtre myOverlay, la fermer.
window.onclick = function(event) {
  if (event.target == myOverlay) {
    myOverlay.style.display = "none";
  }
}

// Ouvrir la boîte de recherche en plein écran
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

// Fermer la boîte de recherche plein écran
function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}

// Fonction de recheche dans un tableau
function colSearch() {
  var input, filter, table, tr, td, td3, i, txtValue;
  
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {

    td = tr[i].getElementsByTagName("td")[0];

    if (td) {

      txtValue = tr[i].getElementsByTagName("td")[1].textContent || tr[i].getElementsByTagName("td")[1].innerText;
      txtValue += tr[i].getElementsByTagName("td")[2].textContent || tr[i].getElementsByTagName("td")[2].innerText;
      txtValue += tr[i].getElementsByTagName("td")[3].textContent || tr[i].getElementsByTagName("td")[3].innerText;
      txtValue += td.textContent || td.innerText;

      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      }else {
        tr[i].style.display = "none";
      }
    }
  }
}

function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("td")[0];
      y = rows[i + 1].getElementsByTagName("td")[0];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}