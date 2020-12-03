//toggles dropdown button buttons
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
//closes dropdown button when user clicks outside button area
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
//shows table for 2020 women's rankings
function one(){
  var a = document.getElementById("t1");
  var b = document.getElementById("t2");
  var c = document.getElementById("t3");
  var d = document.getElementById("t4");
  var e = document.getElementById("t5");
  a.style.display = "table";
  b.style.display = "none";
  c.style.display = "none";
  d.style.display = "none";
  e.style.display = "none";
}
//shows table for 2019 women's rankings
function two(){
  var a = document.getElementById("t1");
  var b = document.getElementById("t2");
  var c = document.getElementById("t3");
  var d = document.getElementById("t4");
  var e = document.getElementById("t5");
  a.style.display = "none";
  b.style.display = "table";
  c.style.display = "none";
  d.style.display = "none";
  e.style.display = "none";
}
//shows table for 2018 women's rankings
function three(){
  var a = document.getElementById("t1");
  var b = document.getElementById("t2");
  var c = document.getElementById("t3");
  var d = document.getElementById("t4");
  var e = document.getElementById("t5");
  a.style.display = "none";
  b.style.display = "none";
  c.style.display = "table";
  d.style.display = "none";
  e.style.display = "none";
}
//shows table for 2017 women's rankings
function four(){
  var a = document.getElementById("t1");
  var b = document.getElementById("t2");
  var c = document.getElementById("t3");
  var d = document.getElementById("t4");
  var e = document.getElementById("t5");
  a.style.display = "none";
  b.style.display = "none";
  c.style.display = "none";
  d.style.display = "table";
  e.style.display = "none";
}
//shows table for 2016 women's rankings
function five(){
  var a = document.getElementById("t1");
  var b = document.getElementById("t2");
  var c = document.getElementById("t3");
  var d = document.getElementById("t4");
  var e = document.getElementById("t5");
  a.style.display = "none";
  b.style.display = "none";
  c.style.display = "none";
  d.style.display = "none";
  e.style.display = "table";
}