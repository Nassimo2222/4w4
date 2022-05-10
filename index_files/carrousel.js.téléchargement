(function(){

    console.log('vive Javascript');
    let boite__carrousel = document.querySelector('.boite__carrousel');
    let boite__carrousel__ferme = document.querySelector('.boite__carrousel__ferme');
    let boite__carrousel__navigation = document.querySelector('.boite__carrousel__navigation');
    
    let galerie__img = document.querySelectorAll('.galerie img');
    console.log(galerie__img.length);
    /* Création d'un élément Img */
    let elmImg = document.createElement('img')
    // Dans l'article de la boite modale on ajoute la balise img
    boite__carrousel.append(elmImg);
    /* On parcours chacune des img de la galerie */
    let index = 0;
    for (const img of galerie__img) {
        let bouton = document.createElement('button');
        bouton.dataset.index = index++;
        boite__carrousel__navigation.append(bouton);

        bouton.addEventListener('mousedown', function() {
            elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'));
        })
        
        img.addEventListener('mousedown', function(){
            console.log(this.tagName)
            boite__carrousel.classList.add('boite__carrousel__ouvrir');
            console.log(this.getAttribute('src'));
           // elmImg.setAttribute('src',this.getAttribute('src'));
           // console.log(this.parentNode.parentNode.children[0].innerHTML);
           // boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML;
           elmImg.setAttribute('src', this.getAttribute('src'));
        })
    }

    boite__carrousel__ferme.addEventListener('mousedown', function(){
        boite__carrousel.classList.remove('boite__carrousel__ouvrir');
    })

})()