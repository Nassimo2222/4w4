(function(){

    console.log('vive Javascript');
    let boite__modale = document.querySelector('.boite__modale');
    let boite__modale__ferme = document.querySelector('.boite__modale__ferme');
    let boite__modale__texte = document.querySelector('.boite__modale__texte');
    let cours_desc_suite = document.querySelectorAll('.cours__desc__suite');
    console.log('boite_modal.js fonctionne = ' + cours_desc_suite.length);

    for (const bouton of cours_desc_suite) {
        bouton.addEventListener('mousedown', function(){
            console.log(this.tagName)
            boite__modale.classList.add('boite__modale__ouvrir');
            console.log(this.parentNode.parentNode.children[0].innerHTML);
            boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML;
        })
    }

    boite__modale__ferme.addEventListener('mousedown', function(){
        boite__modale.classList.remove('boite__modale__ouvrir');
    })

})()