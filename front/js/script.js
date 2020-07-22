window.onload = function () {

    //COOKIES
    $('#accepte').click(function(){
        $('#cookiesConteneur').hide();
    })

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


    //FOOTER RWD
    $('.bas').click(function(){
        $('.cache').toggle();
    })
















}







