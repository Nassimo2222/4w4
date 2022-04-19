(function(){

    let collection_bout_suite = document.querySelectorAll('.cours__desc__suite');
    console.log('boite_modal.js fonctionne = ' + collection_bout_suite.length);

    for (const bouton of collection_bout_suite) {
        bouton.addEventListener('mousedown', function(){
            console.log(this.tagName)
        })
    }

})()