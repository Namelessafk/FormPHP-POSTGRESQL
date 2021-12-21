const cpf = document.querySelector('input[name="cpf"]');

const name1 = document.querySelectorAll('input[type="text"]')



console.log(name1)

name1[1].readOnly = true

name1[0].addEventListener('blur', () =>
 {name1[1].readOnly = false})

console.log(name1)




let aviso


let mask

cpf.addEventListener('change',() =>{
    cpf.value = mask
    mask      = ''
}

)




cpf.addEventListener('keyup', (event) => {
    if(parseInt(event.key)){

        let value = cpf.value;
        
        
        if(value.length){
            mask = value.slice(0,3)
        }
        if(value.length > 6 | value.length < 9){
            mask = `${mask}.${value.slice(3,6)}`
        }
        
        if(value.length > 9 | value.length < 11){
            mask = `${mask}.${value.slice(6,9)}`
        }
        
        if(value.length >= 11){
            mask = `${mask}-${value.slice(9,11)}`
        }
        console.log(mask);
    }else{
        
    }

})

