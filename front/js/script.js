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
var btni1 = document.getElementById('btni1');
var btni2 = document.getElementById('btni2');
var btni3 = document.getElementById('btni3');

function modalDisplay(){
	modal.style.display= "none";
}

btni.onclick= function(){
	modal.style.display= "block";
}

btni1.onclick= function(){
	modal.style.display= "block";
}

btni2.onclick= function(){
	modal.style.display= "block";
}

btni3.onclick= function(){
	modal.style.display= "block";
}

btnNo.onclick= function(){
	modal.style.display= "none";
}

btnNo2.onclick= function(){
	modal.style.display= "none";
}
