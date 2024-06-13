var home=document.getElementById('home');
var info=document.getElementById('info');
var instructors=document.getElementById('instructors');
var resources=document.getElementById('resources');
var contact=document.getElementById('contact');
var sign=document.getElementById('sign');




home.onfocus=function(){
  window.location.href='home.html';
}
info.onfocus=function(){
  window.location.href='info.html';
}
instructors.onfocus=function(){
  window.location.href='instructors.html';
}
resources.onfocus=function(){
  window.location.href='resources.html';
}
contact.onfocus=function(){
  window.location.href='contact.html';
}
sign.onfocus=function(){
  window.location.href='sign.html';
}
var   hm= document.querySelector('input[id="home"]');
var   inf= document.querySelector('input[id="info"]');
var   inst= document.querySelector('input[id="instructors"]');
var   rsr= document.querySelector('input[id="resources"]');
var   cntct= document.querySelector('input[id="contact"]');

var x= [hm,inf,inst,rsr,cntct];

 hm.addEventListener('mouseover', function() {
   hm.style.backgroundColor = 'white';
   hm.style.color='#1b75cf';
 });
 hm.addEventListener('mouseout', function() {
   hm.style.backgroundColor = '#1b75cf';
   hm.style.color='white';
 });
 inf.addEventListener('mouseover', function() {
  inf.style.backgroundColor = 'white';
  inf.style.color='#1b75cf';
});
inf.addEventListener('mouseout', function() {
  inf.style.backgroundColor = '#1b75cf';
  inf.style.color='white';
});
inst.addEventListener('mouseover', function() {
  inst.style.backgroundColor = 'white';
  inst.style.color='#1b75cf';
});
inst.addEventListener('mouseout', function() {
  inst.style.backgroundColor = '#1b75cf';
  inst.style.color='white';
});
rsr.addEventListener('mouseover', function() {
  rsr.style.backgroundColor = 'white';
  rsr.style.color='#1b75cf';
});
rsr.addEventListener('mouseout', function() {
  rsr.style.backgroundColor = '#1b75cf';
  rsr.style.color='white';
});
cntct.addEventListener('mouseover', function() {
  cntct.style.backgroundColor = 'white';
  cntct.style.color='#1b75cf';
});
cntct.addEventListener('mouseout', function() {
  cntct.style.backgroundColor = '#1b75cf';
  cntct.style.color='white';
});

var sgan = document.querySelector('input[id="sign"]');
sgan.addEventListener('mouseover', function() {
  sgan.style.backgroundColor = 'black';
  sgan.style.color='#cfb016';

});
sgan.addEventListener('mouseout', function() {
  sgan.style.backgroundColor = '#cfb016';
  sgan.style.color='black';
});
function showDiv(divId) {
  document.getElementById(divId).classList.remove('dv');
}

function hideDiv(divId) {
  document.getElementById(divId).classList.add('dv');
}
var emailInput = document.getElementById("email");
var validateBtn = document.getElementById("validate");
var resultPara = document.getElementById("result");
function validateGmail(email) {
  var gmailRegex = /^[a-zA-Z0-9._-]+@gmail+\.[a-zA-Z]{2,}$/;
  return gmailRegex.test(email);
}

// Utilisation de la fonction
var email = "example@gmail.com";
if (validateGmail(email)) {
  console.log("Adresse Gmail valide");
} else {
  console.log("Adresse Gmail non valide");
}


// Ajout d'un écouteur d'événement sur le bouton pour vérifier l'adresse email saisie
validateBtn.addEventListener("click", function() {
  var email = emailInput.value;
  if (validateGmail(email)) {
    resultPara.textContent = "Adresse Gmail valide";
  } else {
    resultPara.textContent = "Adresse Gmail non valide";
  }
});




