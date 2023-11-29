const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
  toastTrigger.addEventListener('click', () => {
    toastBootstrap.show()
  })
}


if(document.getElementById('choixNouvSexe').value == "H"){
  document.getElementById('choixMasc').setAttribute('selected', 'selected');
  document.getElementById('choixFem').removeAttribute('selected');
  document.getElementById('choixAutre').removeAttribute('selected');
}
else if(document.getElementById('choixNouvSexe').value == "F"){
  document.getElementById('choixMasc').removeAttribute('selected');
  document.getElementById('choixFem').setAttribute('selected', 'selected');
  document.getElementById('choixAutre').removeAttribute('selected');
}
else if(document.getElementById('choixNouvSexe').value == "A"){
  document.getElementById('choixMasc').removeAttribute('selected');
  document.getElementById('choixFem').removeAttribute('selected');
  document.getElementById('choixAutre').setAttribute('selected', 'selected');
}
