// BOUTON ECHANGE EN JS

var echange = document.getElementById('echange');
var echange2 = document.getElementById('echange2');
var js = document.getElementById('js');
var js2 = " Ne recherche pas d'échange";
var js3 = " Recherche d'échange"
console.log(echange2)
console.log(echange)
echange.addEventListener('click', function(){
    console.log("testclickechange")
    if(echange.style.color=='black'){
       echange.style.color=''
       js.innerHTML = js3;     
    }else{ echange.style.color='black'
            js.innerHTML = js2;

}

})

// MODAL INSCRIPTION

var modal = document.getElementById('modal');
var btni = document.getElementById('btni');

function modalDisplay(){
	modal.style.display= "none";
}

btni.onclick= function(){
	modal.style.display= "block";
}


