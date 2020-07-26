window.onload = function (){

// MOBILE
// LIENS
$('.lienMessages').click(function(){
console.log("lienMessages")
    $('.contactMob').hide();
    $('.messagesMob').show();
    console.log("messagesMob")
})

$('.lienContacts').click(function(){
    console.log("lienContacts")
        $('.contactMob').show();
        $('.messagesMob').hide();
})

//CONTACTS
$(function() {
    $( '.list-group > .media' ).on( 'click', function() {
          $('.list-group > .media').removeClass('activeProfil');
          $(this).addClass('activeProfil');
    });
});


//FOOTER RWD
$('.bas').click(function(){
    $('.cache').toggle();
})







} //FERMETURE WINDOW ONLOAD

