window.onload=function(){
    //texte inscription RWD
    $('#afficher').click(function(){
        $('#masque').show();
        $('#afficher').hide();
        $('#reduire').show();
    })

    $('#reduire').click(function(){
        $('#masque').hide();
        console.log("window")
        
        $('#afficher').show();
        $('#reduire').hide();
    })

    // Actualités RWD
    var post3 = document.getElementById('post3');
    var post4 = document.getElementById('post4');
    var voirPlus = document.getElementById('voirPlus');
    
    voirPlus.addEventListener('click', function(){
        post3.style.display = 'block';
        post4.style.display = 'block';
    })























  }







