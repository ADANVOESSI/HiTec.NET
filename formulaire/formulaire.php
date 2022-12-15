<?php
    require "validate.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="bignon.css">
</head>
<body>
    <div class="select">
        <a>
            <svg width="2rem" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
            Mon compte
        </a>
    </div>
   
    <div id="openModal" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close" id="close1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                </svg> 
            </a>
                <h2>Mon compte</h2>
            <form action="formulaire.php" method="post">
                <fieldset>
                    <p>J'ai déja un compte</p>
                    <div class="form-connexion-flex">
                        
                        <div>
                            <label for="">Mon addresse email</label>
                        </div>
                        <div>
                            <input type="email" required="required"> <br>
                        </div>
                                                 
                    </div>
                    <div class="vertical-line"></div>
                    <div class="form-connexion-flex">
                        <div>
                            <label for="">Mon mot de passe</label>
                        </div>
                        <div>
                            <input type="password" required="required"> <br>
                        </div>
                    </div>
                    <div class="vertical-line"></div>

                    <div class="form-connexion-flex">
                        <button type="submit" class="button">Se connecter</button>
                        <a href="#">J'ai oublier mon mot de passe</a>
                    </div> 
                </fieldset>

                <fieldset>
                    <p>Je n'ai pas de compte</p> <br>
                    <a href="#">Créer un compte</a>
                </fieldset>
            </form>

        </div>
    </div>


    <div id="openModal2" class="modalDialog2">
        <div>
            <a href="#close" title="Close" class="close" id="close2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                </svg>  
            </a>
            <h2>Création de compte</h2>
            <form action="formulaire.php" method="post">
                <fieldset>
                    <p>Informations personnelle</p>
                    
                    <div class="form-connexion-flex">
                        <div>
                            <label for="lastname">Nom</label>
                        </div>
                        <div>
                            <input type="text" name="lastname"> <br>
                        </div>
    
                    </div>
                    <div class="vertical-line"></div>
                    <div class="form-connexion-flex">

                        <div>
                            <label for="firstname">Prénom</label>
                        </div>
                        <div>
                            <input type="text" name="firstname"> <br>
                        </div>   

                    </div>
                    <div class="vertical-line"></div>
                    <div class="form-connexion-flex">
                        
                        <div>
                            <label for="username">Nom d'utilisateur</label>
                        </div>
                        <div>
                            <input type="text" name="username"> <br>
                        </div>
                        
                    </div>
                    <div class="vertical-line"></div>
                    <div class="form-connexion-flex">
                        
                        <div>
                            <label for="email">Email</label>
                        </div>
                        <div>
                            <input type="email" required= "required" name="email"> <br>
                        </div>
                        
                    </div>
                    <div class="vertical-line"></div>

                </fieldset>

                <fieldset>    
                    <div class="form-connexion-flex">
                        <div>
                            <label for="pwd">Mot de passe</label>
                        </div>
                        <div>
                            <input type="password" required="required" name="pwd"> <br>
                        </div>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="form-connexion-flex">
                        <div>
                            <label for="c_pwd">Confirmer mot de passe</label>
                        </div>
                        <div>
                            <input type="password" required="required" 
                            name="c_pwd"> <br>
                        </div>
                    </div>
                    <div class="vertical-line"></div>
    
                    <div class="form-connexion-flex">
                        <button type="submit" class="button">S'inscrire</button>
                        <a href="#" id="redirect_connexion">J'ai déja un compte </a>
                    </div>
                
                </fieldset>
            </form>
    
        </div>
    </div>
    <script>
        let select=document.querySelector("body>div")
        console.log(select);
        let connexionAccess = document.querySelector("#openModal form fieldset:nth-child(2) a")
        let linkConnexionToModal2 = document.querySelector("a[href='#openModal2']")
        let div1=document.getElementById("openModal")
        let div2=document.getElementById("openModal2")
        let modalDialog2=document.querySelector("modalDialog2")
        let redirect_connexion=document.querySelector("#redirect_connexion")
        let close1=document.querySelector("#close1")
        let close2=document.querySelector("#close2")
        console.log(connexionAccess);
        console.log(div1);
        console.log(div2);
        select.addEventListener("click", function(e){
            e.preventDefault();
           div1.style.display="block";
        })
        connexionAccess.addEventListener("click", function(e){
            e.preventDefault();
            div1.style.display="none";
            div2.style.display="block";
        })

        redirect_connexion.addEventListener("click", function(e){
            e.preventDefault();
            div2.style.display="none";
            div1.style.display="block";
        })

        close1.addEventListener("click", function(e){
            div1.style.display="none";
            div2.style.display="none";
        })

        close2.addEventListener("click", function(e){
            
            div2.style.display="none";
        })

    </script>
</body>
</html>