// selectionner
let selectionChamp = document.querySelectorAll('td');
let btn_champ = document.querySelector('.btn-champ')
let btn_annuler = document.querySelector('.annuler');
let btn_annuler2 = document.querySelector('.annuler2');

console.log(selectionChamp);

// évènements
btn_annuler2.addEventListener('click', fermPopup2);
btn_annuler.addEventListener('click', fermPopup);
btn_champ.addEventListener('click', activePopup);
selectionChamp.forEach(btn => {
    btn.addEventListener('click', activePopup);

    // fonctions
function activePopup(e){
    e.preventDefault();

    let champActive = document.querySelector('.popup2');
    champActive.classList.add('active');
}
})

function activePopup(e){
    e.preventDefault();
    let champActive = document.querySelector('.popup');
    champActive.classList.add('active')
}


function fermPopup(){
    console.log("ferme")
    let champActive = document.querySelector('.popup');
    champActive.classList.remove('active')
}

function fermPopup2(){
    console.log("close")
    let champActive = document.querySelector('.popup2');
    champActive.classList.remove('active')
}