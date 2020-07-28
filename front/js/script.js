window.onload = function () {

    var cookiesConteneur = document.getElementById('cookiesConteneur');

    function checkCookie() {
        if (readCookie('toto') != null) {
            console.log("Cookie exist");
            cookiesConteneur.style.display = 'none';
        } else {
            console.log("Cookie pas la");
            cookiesConteneur.style.display = 'block';
        }
    }

    checkCookie();

    accepte.addEventListener('click', (function() {
        createCookie('toto', 'test', 1);
        readCookie(name);
        console.log(name, 'read');
        cookiesConteneur.style.display = 'none';
    }))

    ///////////////////////////////// COMMUN ///////////////////////////

    //FOOTER MOBILE
    $('.bas').click(function () {
        $('.cache').toggle();
    })

    //////////////////////////////// ACCUEIL /////////////////////////////
    //COOKIES MOBILE
    //apparition
    var cookiesMobile = document.getElementById('cookiesMobile');

    function timerMob() {
        cookiesMobile.style.display = 'block';
    }
    setTimeout(timerMob, 1000);

    //disparition
    /*
    $('#accepteMob').click(function () {
        $('#cookiesMobile').hide();
    })

    $('#croix').click(function () {
        $('#cookiesMobile').hide();
    })
    */
    //COOKIES DESKTOP
    //apparition
    //disparition

    var accepteMob = document.getElementById('accepteMob');

    function createCookie(name, value, days) {
        var expires;
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();

        } else {
            expires = "7";
        }
        document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
        console.log(document.cookie)
    }

    function readCookie(name) {
        var nameEQ = encodeURIComponent(name) + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ')
                c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0)
                return decodeURIComponent(c.substring(nameEQ.length, c.length));
        }
        return null;
    }
    
    /*
    function eraseCookie(name) {
        createCookie(name, "", 0);
    };*/

    function unPopCookie(name){
        if(createCookie(name) !== " "){
            console.log("createCookie", createCookie)
            cookiesConteneur.style.display = 'none';
        }else{
            cookiesConteneur.style.display = 'block';
        }
    }


    //TEXTE INSCRIPTION COLLAPSE MOBILE
    $('#afficher').click(function () {
        console.log("afficher")
        $('#afficher').hide();
        $('.masque').show();
        $('#reduire').show();
        $('#points').hide();
    })

    $('#reduire').click(function () {
        $('.masque').hide();
        $('#afficher').show();
        $('#reduire').hide();
        $('#points').show();
    })

    //ACTUALITES MOBILE
    $('#voirPlus').click(function () {
        $('#post3, #post4').show();
        $('#voirMoins').show();
        $('#voirPlus').hide();
    })

    $('#voirMoins').click(function () {
        $('#post3, #post4').hide();
        $('#voirMoins').hide();
        $('#voirPlus').show();
    })

    ///////////////////////////// MESSAGERIE ////////////////////////////////

    // AFFICHER CONTACTS/MESSAGES MOBILE
    $('.lienMessages').click(function () {
        $('.contactMob').hide();
        $('.messagerieMob').show();
    })

    $('.lienContacts').click(function () {
        $('.contactMob').show();
        $('.messagerieMob').hide();
    })

    //SCROLL BAS MESSAGERIE MOBILE
    $('.lienMessages').click(function () {
        $('#fin')[0].scrollIntoView(false);
    })

    //TITRES LIENS CLICK BACKGROUND COLOR MOBILE
    $(function () {
        $('.liens > .nav-item').on('click', function () {
            $('.liens > .nav-item').removeClass('lien');
            $(this).addClass('lien');
        })
    })

    //CONTACTS CLICK BACKGROUND COLOR
    $(function () {
        $('.list-group > .media').on('click', function () {
            $('.list-group > .media').removeClass('activeProfil');
            $(this).addClass('activeProfil');
        });
    });

    ///////////////////////////// PROFIL ////////////////////////////////

    //TEXT AREA DESCRIPTION
    $('#btnDescModif').click(function(){
        $('#descModif').css('border', 'solid').show();
        $('#btnDescValider').show();
        $('#btnDescModif').hide();
    })

    $('#btnDescValider').click(function(){
        $('#descModif').css('border', 'none').show();
        $('#btnDescValider').hide();
        $('#btnDescModif').show();
    })

    //TEXT AREA VIE SUR PLACE
    
    $('#btnVieModif').click(function(){
        $('#vieModif').css('border', 'solid').show();
        $('#btnVieValider').show();
        $('#btnVieModif').hide();
    })

    $('#btnVieValider').click(function(){
        $('#vieModif').css('border', 'none').show();
        $('#btnVieValider').hide();
        $('#btnVieModif').show();
    })

} //FERMETURE WINDOW ONLOAD