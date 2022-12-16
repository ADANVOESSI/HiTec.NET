const inplName = document.querySelector('#lname');   
const inpfName = document.querySelector('#fname');
const inpUser = document.querySelector('#utilisateur');
const inpEmail = document.querySelector('#email');
const inpPassword = document.querySelector('#password');
const inpConfirm = document.querySelector('#passwordconf');
const inpSubmit = document.querySelector('#submit');

let result =  "<?= $result ?>";

let select=document.querySelector(".user");


let connexionAccess = document.querySelector("#openModal form fieldset:nth-child(2) a")

let div1=document.getElementById("openModal");

let div2=document.getElementById("openModal2");

let modalDialog2=document.querySelector("modalDialog2");

let redirect_connexion=document.querySelector("#redirect_connexion");

let close1=document.querySelector("#close1");

let close2=document.querySelector("#close2");



select.addEventListener("click", function(e){
    e.preventDefault();
    div1.style.display="block";
    inpSubmit.setAttribute("disabled","disabled")
});

connexionAccess.addEventListener("click", function(e){
    e.preventDefault();
    div1.style.display="none";
    div2.style.display="block";
});

redirect_connexion.addEventListener("click", function(e){
    e.preventDefault();
    div2.style.display="none";
    div1.style.display="block";
});

close1.addEventListener("click", function(e){
    div1.style.display="none";
    div2.style.display="none";
});

close2.addEventListener("click", function(e){
    
    div2.style.display="none";
});




/****************************/


let tab=["images/product-1/slide-1-lg.jpg",
        "images/product-1/slide-2-lg.jpg",
        "images/product-1/slide-3-lg.jpg",
        "images/product-1/slide-4-lg.jpg",
        "images/product-1/slide-5-lg.jpg"
    ]
        let container = document.querySelector(".container>img");

        let images_block = document.querySelectorAll(".mini-picture img");

        images_block.forEach( function(element,index){
            element.addEventListener("click", function(e){
                e.preventDefault();
                container.setAttribute("src", tab[index]);
  
                // element.classList.add("border_img");
            })
        });

        /*Script largest modal*/

        let closes = document.querySelector("#closebtn");
        // let openModalPicture = document.querySelector("#open-modal-picture")
        let openModalPicture = document.querySelector("#open-modal-picture")
        closes.addEventListener("click", function(e){
            openModalPicture.style.display =" none";
        })

        
        let containerBlock = document.querySelector(".container>img");
        containerBlock.addEventListener("click", function(e){
            
            let container_modal = document.querySelector("#container_modal>img");
            let srcSource = containerBlock.getAttribute("src");
             openModalPicture.style.display = "block";
             container_modal.setAttribute("src", srcSource)
        })

        let modal_image=document.querySelector("#modal_image")
        let images_zone=document.querySelectorAll(".images_zone img");
    
        images_zone.forEach(function (element, index) {   
                element.addEventListener("click", function (e) {
                    e.preventDefault();
                
                    let srcSource = element.getAttribute("src")
              
                    modal_image.setAttribute("src",srcSource);
                    // element.classList.add("border_img");
                })
            });

// let closebtn = document.querySelector('#closebtn');





/***************************************
 * INCREMENT
*/


let addBtn = document.querySelector('#addBtn');
let span_increment = document.querySelector(".span_increment");

addBtn.addEventListener("click", function(e){
            e.preventDefault(); 
            
            span_increment.textContent++;
            span_increment.style.display="block"
        })
        
        


let click = document.querySelector(".periph");
let div = document.querySelector(".div");
click.addEventListener("click", function(e) {
    e.preventDefault();
    if(div.style.display == "block") {
        div.style.display = "none"; 
    }else{
        div.style.display = "block"; 
    }
});


/*********INSCRIPTION MODAL************/




if(inplName.value.trim().length > 0  ) {
    inpSubmit.removeAttribute("disabled","disabled")
   
}else{
    inpSubmit.setAttribute("disabled","disabled")
}

inpfName.addEventListener('input', (e) => {
    if(inpfName.value.trim().length > 0) {
        inpSubmit.removeAttribute("disabled","disabled")
       
    }else{
        inpSubmit.setAttribute("disabled","disabled")
    }
})

inpUser.addEventListener('input', (e) => {
    if(inpUser.value.trim().length > 0) {
        inpSubmit.removeAttribute("disabled","disabled")
       
    }else{
        inpSubmit.setAttribute("disabled","disabled")
    }
    
})

if(result === inpEmail.value.trim()) {
    alert("Erreur de saisie. Email déjà existant!!!!!!")
}
console.log(result);
// //check email
// inpEmail.addEventListener('input', (e) => {

    
//     const regexEmail = /\S+@\S+\.\S+/;
//     //search methods will search for regexEmail in the input value and return the position of the match, if it is 0 it is a valid match
//     if(e.target.value.search(regexEmail) === 0){

//         inpSubmit.setAttribute("disabled","disabled")
        
//         //if the position is -1 it means that there is no match, the input value doesn't contain regexEmail
//     } else if(e.target.value.search(regexEmail) === -1) {
//         inpSubmit.removeAttribute("disabled","disabled")

//     }
// })

