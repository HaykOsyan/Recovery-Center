let icnUser = document.getElementById('icnUser');
icnUser.addEventListener('mouseover',function (){
    showLoginRegPopup();
});

function showLoginRegPopup() {
    let elm = document.getElementById('loginRegPopup');
    elm.classList.toggle('d-block');
}
