window.onload = function () {
    $('.bas').click(function () {

    //COOKIES MOBILE
    //apparition
    var cookiesMobile = document.getElementById('cookiesMobile');

    function timerMob(){
        cookiesMobile.style.display = 'block';
    }
    setTimeout(timerMob, 1000);    

    //disparition
    $('#accepteMob').click(function(){
        $('#cookiesMobile').hide();
    })

    $('#croix').click(function(){
        $('#cookiesMobile').hide();
    })

    //COOKIES DESKTOP
    //apparition
    var cookiesConteneur = document.getElementById('cookiesConteneur');

    function timer(){
        cookiesConteneur.style.display = 'block';
    }setTimeout(timer, 1000);    

    //disparition
    $('#accepte').click(function(){
        $('#cookiesConteneur').hide();
    })

////////////////////////////////////////////////////

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

////////////////////////////////////////////////////

    //ACTUALITES RWD
    $('#voirPlus').click(function(){
        $('#post3, #post4').show();
        $('#voirMoins').show();
        $('#voirPlus').hide();
    })

    $('#voirMoins').click(function(){
        $('#post3, #post4').hide();
        $('#voirMoins').hide();
        $('#voirPlus').show();
    })

    ////////////////////////////////////////////////////

    //FOOTER RWD
    $('.bas').click(function(){
        $('.cache').toggle();
    })


})} //FERMETURE DE WINDOW ONLOAD