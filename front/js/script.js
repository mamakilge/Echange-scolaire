window.onload = function () {

    //TEXTE INSCRIPTION COLLAPSE RWD
    $('#afficher').click(function () {
        $('#afficher').hide();
        $('#masque').show();
        $('#reduire').show();
    })

    $('#reduire').click(function () {
        $('#masque').hide();
        $('#afficher').show();
        $('#reduire').hide();
    })

    // ACTUALITES RWD
    var post3 = document.getElementById('post3');
    var post4 = document.getElementById('post4');
    var voirPlus = document.getElementById('voirPlus');
    var voirMoins = document.getElementById('voirMoins');

    voirPlus.addEventListener('click', function () {
        post3.style.display = 'block';
        post4.style.display = 'block';
        voirPlus.style.display = 'none';
        voirMoins.style.display = 'block';
    });

    voirMoins.addEventListener('click', function () {
        post3.style.display = 'none';
        post4.style.display = 'none';
        voirPlus.style.display = 'block';
        voirMoins.style.display = 'none';
    });


    //FOOTER RWD
    $('.lienCache').click(function(){
        
    })


















}







