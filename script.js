// Get the modal element
var modal = document.getElementById("myModal");

// Get the button that opens the modal
// This could be triggered by a button or directly on page load
// For page load, you can use window.onload or document.addEventListener('DOMContentLoaded', function() {...});
// Here, it will show the modal when the page is loaded
window.onload = function() {
  modal.style.display = "block";
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
