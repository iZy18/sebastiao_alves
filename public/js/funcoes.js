function fazerScroll(yOffset) {
  let main = document.querySelector("main");
  const y = main.getBoundingClientRect().top + yOffset;
  window.scrollTo({ top: y, behavior: "smooth" });
}

function abrir() {
  setTimeout(abrirMenu, 300);
}

function abrirMenu() {
  $("#menu-dropdown").dropdown("toggle");
}

function voltarAtras() {
  window.history.back();
}

function verMais() {
  $("#texto").removeClass("d-none");

  $("#texto-pequeno").addClass("d-none");
  $("#ver-mais-botao").addClass("d-none");
}

function logOff() {
  var confirmed = confirm("Are you sure you want to log off?");

  if (confirmed) {
    window.location.href = "logoff";
  } else {
    window.location.href = "";
  }
}
