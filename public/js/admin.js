let elemBtn = document.getElementById('category_delete');
elemBtn.addEventListener("click", function (){
    deleteCat();
});
function deleteCat (){
    (async function () {
        let token = document.getElementById('metaCSRF').content;
        let id = 8;

        let response = await fetch('/categories/'+id, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json;charset=utf-8',
                'X-CSRF-TOKEN': token
            },
        });
        let result = await response.text();
        // if (result != '') {
        //     document.getElementsByClassName('qa-items-block')[0].innerHTML = result;
        //     document.getElementById('load-more-qa').style.display = 'none';
        // }
    })()

}
