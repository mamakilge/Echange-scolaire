window.onload = function (){

// MOBILE
// LIENS
$('.lienMessages').click(function(){
console.log("lienMessages")
    $('.contactMob').hide();
    $('.messagesMob').show();
})

$('.lienContacts').click(function(){
    console.log("lienContacts")
        $('.contactMob').show();
        $('.messagesMob').hide();
    })

//CONTACTS
$('.media').click(function(){
    if($('.media') === $(this)){
        $(this).css("background-color", "#02C39A")
    }

})

$('.unContact').click(function(e){
    e.preventDefault();
    $('.unContact').css('background-color', '#02C39A');
})


} //FERMETURE WINDOW ONLOAD

