window.onload = function () {

    ///////////////////////////////// COMMUN ///////////////////////////

    //FOOTER MOBILE
    $('.bas').click(function () {
        $('.cache').toggle();
    })

    //////////////////////////////// ACCUEIL /////////////////////////////

    //COOKIES DESKTOP + MOBILE
    var cookiesConteneur = document.getElementById('cookiesConteneur');
    var accepte = document.getElementById('accepte');
    var cookiesMobile = document.getElementById('cookiesMobile');
    var accepteMob = document.getElementById('accepteMob');

    //CLICK DESKTOP = appeler les fonctions + paramètres du cookie + ne pas afficher mobile
    accepte.addEventListener('click', (function() {
        createCookie('cookiki', 'en place', 0);
        readCookie(name);
        eraseCookie(name);
        cookiesConteneur.style.display = 'none';
        cookiesMobile.style.display = 'none';
        console.log(name);
    }))

    // CLICK MOBILE = appeler les fonctions + paramètres du cookie + ne pas afficher desktop
    accepteMob.addEventListener('click', (function(){
        createCookie('cookiki', 'en place', 0);
        readCookie(name);
        eraseCookie(name);
        cookiesMobile.style.display = 'none';
        cookiesConteneur.style.display = 'none';
    }))

    //CREER FONCTION COOKIE 
    function createCookie(name, value, days) {
        var expires;
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "-1";
        }
        //place cookie dans document.cookie
        document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
    }

    //LIT LE COOKIE, LE MET EN TABLEAU, VERIFIE LE NOM SANS ESPACE ET LE SAUVEGARDE POUR CHECK
    function readCookie(name) {
        var nameEQ = encodeURIComponent(name) + "=";
        var tabcookie = document.cookie.split(';');
        for (var i = 0; i < tabcookie.length; i++) {
            var c = tabcookie[i];
            while (c.charAt(0) === ' ')
                c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0)
                return decodeURIComponent(c.substring(nameEQ.length, c.length));
        }
        return null;
    }

    //CHECK SI COOKIE EST LA (n'affiche pas div) OU PAS (affiche div)
    function checkCookie() {
        if (readCookie('cookiki') != null) {
            console.log("Cookie exist");
            cookiesConteneur.style.display = 'none';
            cookiesMobile.style.display = 'none';
        } else {
            console.log("Cookie pas la");
            cookiesConteneur.style.display = 'block';
            cookiesMobile.style.display = 'block';
        }
    }

    //LANCER LA FONCTION CHECK
    checkCookie();

    //CREATE COOKIE -1 POUR QU'IL SOIT EXPIRE ET QU'IL S'EFFACE 
    function eraseCookie(name) {
        createCookie(name, "", -1);
    };

////////////////////////////////////////////////////////////
    
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
