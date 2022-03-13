
function openNav() {
  document.getElementById("menu").classList.add("active");
  document.getElementById("menuToggle").classList.add("show");
}

function closeNav() {
  document.getElementById("menu").classList.remove("active");
  document.getElementById("menuToggle").classList.remove("show");
}


var nav = document.querySelector('.main-navigation');
var content = document.querySelector('.content');

window.onload = () => {

    if (content != null) {
      let navHeight = nav.offsetHeight;
      content.style.marginTop = navHeight + "px";
    }



}; // end window onload
