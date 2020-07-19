var echange = document.getElementById('echange');
var echange2 = document.getElementById('echange2');
var js = document.getElementById('js');
var js2 = " Ne recherche pas d'échange";
console.log(echange2)
console.log(echange)
echange.addEventListener('click', function(){
    console.log("testclickechange")
    if(echange.style.color=='black'){
       echange.style.color=''
       js2.innerHTML = js;     
    }else{ echange.style.color='black'
            js.innerHTML = js2;

}

})

