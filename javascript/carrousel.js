(function(){

    console.log('vive Javascript');
    let boite__carrousel = document.querySelector('.boite__carrousel');
    let boite__carrousel__ferme = document.querySelector('.boite__carrousel__ferme');
    let boite__carrousel__navigation = document.querySelector('.boite__carrousel__navigation');
    let boite__carrousel__img = document.querySelector('.boite__carrousel__img');

    
    let galerie__img = document.querySelectorAll('.galerie img');
    console.log(galerie__img.length);
    /* Création d'un élément Img */
    let elmImg;
    // Dans l'article de la boite modale on ajoute la balise img
    boite__carrousel.append(elmImg);
    /* On parcours chacune des img de la galerie */
    let index = 0;
    for (const img of galerie__img) {

        elmImg = document.createElement('img')
        /*let elmImg = document.createElement('img');*/
    
        elmImg.setAttribute('src', img.getAttribute('src'));
        boite__carrousel__img.append(elmImg);

        /*Insertion des radios bouttons dans la boite__carrousel__navigation */
        let bouton = document.createElement('input');
        bouton.setAttribute('type', 'radio');
        bouton.checked = false;
        bouton.setAttribute('name', 'bouton');
        bouton.setAttribute('class', 'bouton');
        bouton.dataset.index = index;
        boite__carrousel__navigation.append(bouton);

        /* Insertion des elmImg de la galerie__Img dans boit__carrousel__img */
        /*;*/
        /*elmImg.img.setAttribute('src', img.src);*/
        /* Dans l'article de la boîte modale on ajoute la balise img */
        /*boite__carrousel__img.append(elmImg);*/

        bouton.addEventListener('change', function(e) {
            e.preventDefault
            console.log(e);
            console.log(this.checked);
            intialiseRadioBouton();
            boite__carrousel__img.children[this.dataset.index].classList.remove('img--ouvrir');
            boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir');
            /*elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'));*/
        })
        
        img.addEventListener('mousedown', function(){
            console.log(this.tagName)
            boite__carrousel.classList.add('boite__carrousel__ouvrir');
            // console.log(this.getAttribute('src'));
            // elmImg.setAttribute('src',this.getAttribute('src'));
            // console.log(this.parentNode.parentNode.children[0].innerHTML);
            // boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML;
            //elmImg.setAttribute('src', this.getAttribute('src'));
            boite__carrousel__img.children[0].classList.add('img--ouvrir');
        })
       index++
    }

    boite__carrousel__ferme.addEventListener('mousedown', function(){
        boite__carrousel.classList.remove('boite__carrousel__ouvrir');
    })

    function intialiseRadioBouton() {  
        for(let i = 0; i < boite__carrousel__navigation.children.length; i++){
            if (boite__carrousel__navigation.children[i].checked == false) {
                boite__carrousel__img.children[i].classList.remove('img--ouvrir');
            }
        } 
    }

})()