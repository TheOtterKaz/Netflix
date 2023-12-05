// const toastTrigger = document.getElementById('liveToastBtn')
// const toastLiveExample = document.getElementById('liveToast')

// if (toastTrigger) {
//   const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
//   toastTrigger.addEventListener('click', () => {
//     toastBootstrap.show()
//   })
// }


// if(document.getElementById('choixNouvSexe').value == "H"){
//   document.getElementById('choixMasc').setAttribute('selected', 'selected');
//   document.getElementById('choixFem').removeAttribute('selected');
//   document.getElementById('choixAutre').removeAttribute('selected');
// }
// else if(document.getElementById('choixNouvSexe').value == "F"){
//   document.getElementById('choixMasc').removeAttribute('selected');
//   document.getElementById('choixFem').setAttribute('selected', 'selected');
//   document.getElementById('choixAutre').removeAttribute('selected');
// }
// else if(document.getElementById('choixNouvSexe').value == "A"){
//   document.getElementById('choixMasc').removeAttribute('selected');
//   document.getElementById('choixFem').removeAttribute('selected');
//   document.getElementById('choixAutre').setAttribute('selected', 'selected');
// }

var choixRating = document.getElementById('textNouvRating');


var texte = document.createElement('p');
texte.setAttribute('class', 'text-center p-0 m-0 h-100 w-100');
texte.setAttribute('style', 'color: white; font-size: 20px; font-weight: bold;');
texte.setAttribute('id', 'textNouvRating');

choixRating.addEventListener('change', function(){
  if(choixRating.value == "G")
  {
    document.getElementById('boxRating').setAttribute('class', 'btn-vert col-2 d-flex align-items-center justify-content-center');

    texte.innerHTML = "G";

    document.getElementById('boxRating').appendChild(texte);
  }
  else{
    document.getElementById('boxRating').setAttribute('class', 'btn-rouge col-2 d-flex align-items-center justify-content-center');

    texte.innerHTML = "R";

  }
});

