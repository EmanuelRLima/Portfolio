function pagedown(mn){
  let topicos0 = document.getElementById(mn);
    if (typeof topicos0 == 'undefined' || topicos0 === null)
    return;
      topicos0.style.display = 'flex';

  var x = document.getElementById("projeto");
    if (x.className === "projetos") {
        x.className += "";
    }else {
      x.className = "projetos";
  }
}

function pageup() {
  if (typeof trade == 'undefined' || trade === null)
    return;
      trade.style.background = '#0d0d0d';
  var x = document.getElementById("projeto");
    if (x.className === "projetos") {
      x.className += " projetosup";
    }else {
      x.className = "projetos";
  }
}

function pageleft(mn){
  let topicos = document.getElementById(mn);
  if (typeof trade == 'undefined' || trade === null)
    if (typeof topicos == 'undefined' || topicos === null)
    return;
      topicos.style.display = 'flex';
      trade.style.background = '#BB405E';
  var x = document.getElementById("TC");
    if (x.className === "TCC") {
        x.className += "";
    }else {
      x.className = "TCC";
  }
}

function pageleftback() {
  var x = document.getElementById("TC");
    if (x.className === "TCC") {
      x.className += " projetosleft";
    }else {
      x.className = "TCC";
  }
}

function pagedown2(mn){
  let topicos = document.getElementById(mn);
  if (typeof trade == 'undefined' || trade === null)
    if (typeof topicos == 'undefined' || topicos === null)
    return;
      topicos.style.display = 'flex';
      trade.style.background = '#008B8B';
  var x = document.getElementById("Cont");
    if (x.className === "Contacts") {
        x.className += "";
    }else {
      x.className = "Contacts";
  }
}

function pagedownback() {
  var x = document.getElementById("Cont");
    if (x.className === "Contacts") {
      x.className += " Contactsright";
    }else {
      x.className = "Contacts";
  }
}

function pageleft2(mn){
  let topicos = document.getElementById(mn);
    if (typeof topicos == 'undefined' || topicos === null)
    if (typeof trade == 'undefined' || trade === null)
    return;
      topicos.style.display = 'flex';
      trade.style.background = '#972e2d';
  var x = document.getElementById("CR");
    if (x.className === "Curriculo") {
        x.className += "";
    }else {
      x.className = "Curriculo";
  }
}

window.onload=function(){

  var a = document.querySelector("#back-to-top");
  a.addEventListener("click", function(){
    window.scrollTo(0,0);
  });
  var b = document.querySelector("#dack-to-top");
  b.addEventListener("click", function(){
  window.scrollTo(0,0);
});
  }

function pageleftback2() {
  var x = document.getElementById("CR");
    if (x.className === "Curriculo") {
      x.className += " projetosleft2";
    }else {
      x.className = "Curriculo";
  }
}

function pagedownback2() {
  var x = document.getElementById("Emanuel");
    if (x.className === "Quem") {
      x.className += " projetosleft3";
    }else {
      x.className = "Quem";
  }
}

function pageup2(mn){
  let topicos = document.getElementById(mn);
    if (typeof topicos == 'undefined' || topicos === null)
    if (typeof trade == 'undefined' || trade === null)
    return;
      topicos.style.display = 'flex';
      trade.style.background = '#191970';
  var x = document.getElementById("Emanuel");
    if (x.className === "Quem") {
        x.className += "";
    }else {
      x.className = "Quem";
  }
}

