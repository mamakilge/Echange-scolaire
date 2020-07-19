var echange = document.getElementById('echange');
var echange2 = document.getElementById('echange2');
var js = document.getElementsByClassName('js');
var js2 = document.getElementsByClassName('js2');
console.log(echange2)
console.log(echange)
echange.addEventListener('click', function(){
    console.log("testclickechange")
    if(echange.style.color=='black'){
       echange.style.color=''
       js2.style.display='block'       
    }else{ echange.style.color='black'

}

})

