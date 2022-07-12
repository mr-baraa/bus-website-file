function alertClose() {
  let body = document.body;
  let close = document.getElementById("close");
  let alert = document.getElementById("alert-logo");
  body.style.overflow = "auto";
  alert.style.display = "none";
  alert.className += " transition";
  document.getElementById("audio").play();
}

function alertOpen() {
  let body = document.body;
  let close = document.getElementById("close");
  let alert = document.getElementById("alert-logo");
  body.style.overflow = "hidden";
  alert.style.display = "flex";
  alert.className += " transition";
  document.getElementById("audio").play();
}

// function edit() {
//   var a = document.getElementById("darkAndlight");
//   a.src = "img/light.png";
//   a.id = "lightanddark";
//   document.getElementById("lightanddark").onclick = function () {
//     editt();
//   };

//   var sec1 = document.getElementById("sec1");

//   sec1.className = "sec1Light";

//   var sec1 = document.getElementById("sec1cont");

//   sec1.className = "sec1cont2";

//   let h1 = document.getElementById("sec1h1");
//   h1.style.color = "#0f0e17";
//   let p = document.getElementById("sec1p");
//   p.style.color = "#0f0e17";
//   var nav = document.getElementById("navigation");
//   nav.style.background = " #edf0f1";
//   nav.style.boxShadow = " 5px 5px 10px #d8dadb,-5px -5px 10px #ffffff;";
//   const li = document.querySelectorAll("li");
//   li.style.color = "red";
// }

// function editt() {
//   var b = document.getElementById("lightanddark");
//   b.src = "img/darkmod-removebg-preview.png";
//   b.id = "darkAndlight";

//   document.getElementById("darkAndlight").onclick = function () {
//     edit();
//   };
// }
