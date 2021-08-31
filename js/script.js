function openmodal(mn){
  let modal1 = document.getElementById(mn);
   if (typeof modal1 == 'undefined' || modal1 === null)
    return;
      modal1.style.display = 'flex';
}

function closemodal(mn){
  let modal1 = document.getElementById(mn);
    if (typeof modal1 == 'undefined' || modal1 === null)
      return;
        modal1.style.display = 'none';
}

function myFunction() {
  var x = document.getElementById("MNavbar");
    if (x.className === "navbar") {
      x.className += " responsive";
    }else {
      x.className = "navbar";
  }
}
