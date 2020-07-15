var commentaire = document.getElementsByClassName('commentaire');
console.log("commentaire", commentaire)

var voirPlus = document.getElementById('voirPlus');
console.log("voirPlus", voirPlus);

voirPlus.addEventListener('click', function () {
console.log("cliqué", voirPlus)

    commentaire.style.display = 'block';
})

