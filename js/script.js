function openmodal(mn){
    let modal = document.getElementById(mn);
    if (typeof modal == 'undefined' || modal === null)
    return;
    
      modal.style.display = 'flex';
  }

  function closemodal(mn){
    let modal = document.getElementById(mn);
    if (typeof modal == 'undefined' || modal === null)
    return;
    
      modal.style.display = 'none';
  }
  
  function myFunction() {
    var x = document.getElementById("MNavbar");
    if (x.className === "navbar") {
      x.className += " responsive";
    } else {
      x.className = "navbar";
    }
  }
  
  