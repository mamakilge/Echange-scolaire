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

var profil = document.getElementById('profil1', 'profil2');
console.log("getElementById")

profil.addEventListener('click', function(){
console.log("addEventListener")
    this.style.backgroundColor = '#02C39A';
})



} //FERMETURE WINDOW ONLOAD

