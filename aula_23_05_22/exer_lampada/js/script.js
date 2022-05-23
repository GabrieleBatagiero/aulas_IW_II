var botao = document.getElementById('botao')
var lamp = document.getElementById('lampada')

//console.log(lamp)

botao.onclick = function(){
   //alert('funcionou') 
   if(botao.value =='Acender'){
       lamp.src = './imgs/acesa.jpg'
       botao.value = 'Apagar'
       botao.innerHTML ='Apagar'
   }else{
       lamp.scr= './imgs/apagada.jpg'
       botao.value = 'Acender'
       botao.innerHTML ='Acender'
   }
}
