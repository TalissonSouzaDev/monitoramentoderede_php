const bars = document.querySelector("#bars")
const container = document.querySelector(".container-sidebar")
const navbar = document.querySelector(".navbar")


bars.addEventListener("click",(e)=>{
    e.preventDefault();
    console.log(window.innerWidth)
    if(bars.value == 'abrir')
    {
        
        // window.innerWidth pega largura da tela
        bars.innerHTML = "<i class='fas fa-bars'></i>"
        bars.value = "fechado"  
        container.style.display = "none"
        navbar.style.width = "100%"

   
       

    }
    else{

        bars.innerHTML = "<i class='fas fa-times'></i>"
        bars.value = "abrir"
        container.style.display = "block"
        container.style.width = "200px"
        navbar.style.width = "200px"
       
     
      
        
    }
    
})