let select=document.querySelector(".user");
    console.log(select);

let connexionAccess = document.querySelector("#openModal form fieldset:nth-child(2) a")

// let linkConnexionToModal2 = document.querySelector("a[href='#openModal2']");

let div1=document.getElementById("openModal");

let div2=document.getElementById("openModal2");

let modalDialog2=document.querySelector("modalDialog2");

let redirect_connexion=document.querySelector("#redirect_connexion");

let close1=document.querySelector("#close1");

let close2=document.querySelector("#close2");
console.log(connexionAccess);
console.log(div1);
console.log(div2);
select.addEventListener("click", function(e){
    e.preventDefault();
    div1.style.display="block";
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
        console.log(images_zone);
        images_zone.forEach(function (element, index) {   
                element.addEventListener("click", function (e) {
                    e.preventDefault();
                    console.log("click");
                    let srcSource = element.getAttribute("src")
                    console.log(srcSource);
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
console.log(addBtn);
console.log(span_increment.textContent);
addBtn.addEventListener("click", function(e){
            e.preventDefault(); 
            
            span_increment.textContent++;
            span_increment.style.display="block"
        })
        
        
// let addBtn = document.querySelectorAll(".button_add");
// addBtn.forEach(function(element, index){
//     element.addEventListener("click", function(e){
//         e.preventDefault(); 
        
//         span_increment.textContent++;
//         span_increment.style.display="block"
//     })
// })

let click = document.querySelector(".periph");
click.addEventListener("click", function() {
    document.querySelector(".rubric").style= "display: none";
});


