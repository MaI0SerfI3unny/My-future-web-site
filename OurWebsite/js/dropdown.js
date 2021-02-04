/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function myFunction_two() {
    document.getElementById("myDropdown_two").classList.toggle("show_two");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn_two')) {

    var dropdowns_two = document.getElementsByClassName("dropdown-content_two");
    var i;
    for (i = 0; i < dropdowns_two.length; i++) {
      var openDropdown_two = dropdowns_two[i];
      if (openDropdown_two.classList.contains('show_two')) {
        openDropdown_two.classList.remove('show_two');
      }
    }
  }
}

function myFunction_three() {
    document.getElementById("myDropdown_three").classList.toggle("show_three");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn_three')) {

    var dropdowns_three = document.getElementsByClassName("dropdown-content_three");
    var i;
    for (i = 0; i < dropdowns_three.length; i++) {
      var openDropdown_three = dropdowns_three[i];
      if (openDropdown_three.classList.contains('show_thre')) {
        openDropdown_thre.classList.remove('show_three');
      }
    }
  }
}
