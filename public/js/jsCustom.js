var dialog = document.getElementById('dialog');
var btnRemoveDialog = document.getElementById('btnClose');

btnRemoveDialog.addEventListener('click', closeDialog);


function closeDialog() {
    dialog.close();
    dialog.style.display = 'none';
    document.getElementById('containerErrors').innerHTML = '';
    sessionStorage.removeItem('message');
}