let icnUser = document.getElementById('icnUser');
icnUser.addEventListener('click',function (){
    showLoginRegPopup();
});

function showLoginRegPopup() {
    let elm = document.getElementById('loginRegPopup');
    elm.classList.toggle('d-block');
}
