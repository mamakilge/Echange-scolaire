window.onload = function (){

// LIENS MOBILE
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




} //FERMETURE WINDOW ONLOAD

