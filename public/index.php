
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiTech | Home</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/formulaire.css">
    <link rel="stylesheet" href="./css/picturemodal.css">
    <link rel="stylesheet" href="./css/normalize.css">

</head>
<body>
    <header class="center">
            <div class="options">
                <ul>
                    <li>Options d'affichage / accessibilité</li>
                    <li>Thème :
                        <a href="#">sombre</a> 
                        <a href="#">contrasté</a> 
                        <a href="#">clair</a> 
                    </li>
                    <li>Interlignage
                        <a href="#">simple</a>
                        <a href="#">augmenté</a>
                    </li>
                </ul>
           </div>
           <div class="divheader center" >
                <div >
                    <a href="index.php">
                        <img src="./images/logo.svg" alt="Logo">
                    </a>
                    <h1>HiTech.NET</h1>
                    <h2>Tout le matériel High-Tech</h2>
                </div>
                <form action="" method="post">
                    <input type="search" name="search" id="search" placeholder="Chercher un produit, une marque...">
                    <span>
                        >>>
                    </span>
                    <select name="nav" id="nav">
                        <option value="Tout les rayons"> Tout les rayons</option>
                        <option value="Ordinateur">Ordinateurs</option>
                        <option value="Périphérique & composants">Périphériques & composants</option>
                        <option value="Téléphones">Téléphones</option>
                        <option value="Objets connectés">Objets connectés</option>
                    </select>
                    <svg width="20"xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>

                
                </form>
                <div>
                    <button class="user" > 
                        <svg width="50px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        <h3>Mon compte</h3>
                    </button>
                    
                    <button class="incrementBtn">
                        <svg width="50px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <h3>Mon panier</h3>
                        <span class="span_increment">0</span>
                    </button>
                </div>
                
            </div>
            <nav class="navbar">
                <ul>
                    <li>
                        <a href="">
                            <svg width="25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                            </svg>
                        
                            Ordinateurs
                        </a>
                    </li>
                    <li>
                        <a href="#" class="periph">
                            <svg width="25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>
                            Périphériques & composants</a>
                    </li>
                    <li>
                        <a href="">
                            <svg  width="25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>
                        
                        Téléphones
                        
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg width="25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        
                            Objets connectés
                        </a>
                    </li>
                </ul>
            </nav>

    </header>
    <div class="container">

    <div class="div">
        <div class="rubric flex">
            <ul>
                <h3 class="margin">Périphériques</h3>
                
                <li>Ecran PC</li>
                <li>Clavier/souris</li>
                <li>Imprimante</li>
                <li>Clef USB</li>
                <li>Disque dur externe</li>
                <li>Onduleur</li>
                <li>Enceinte PC</li>
                <li>Casque audio</li>
                <li>Casque VR</li>
                <li>Musique pro</li>
                <li>Tablette graphique</li>

            </ul>
            <ul>
                <h3 class="margin">Boitier</h3>
                
                <li>Alimentation</li>
                <li>Disque dur</li>
                <li>Disque SSD</li>
                <li>Carte mère</li>
                <li>Carte graphique</li>
                <li>Mémoire PC</li>
                <li>Processus</li>
                <li>Refroidissement</li>
                <li>Kit upgrade PC</li>
                <li>Batterie PC portable</li>

            </ul>
            <ul>
                <h3 class="margin">Imprimante</h3>
                
                <li>Cartouche</li>
                <li>Toner</li>
                <li>Ruban</li>
                <li>Papier</li>
            </ul>
            <ul>
                <h3 class="margin">Connectique</h3>
                
                <li>Câbles PC</li>
                <li>Adaptateurs PC</li>
                <li>Parafoudre</li>
                <li>Multiprise</li>
                <li>Câble secteur</li>
                <li>Câble HDMI</li>
                <li>Switch HDMI</li>
                <li>Adaptateur HDMI</li>
                <li>Câble Rj45</li>
                <li>Connectique Rj45</li>
                <li>Câble audio numérique</li>
                <li>Câble audiophile</li>
                <li>Adaptateur Audio</li>
                <li>Câble audi jack</li>

            </ul>
        </div>
    </div>
        <div id="openModal" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close" id="close1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                    </svg> 
                </a>
                    <h2>Mon compte</h2>
                <form action="index.php" method="post">
                    <fieldset>
                        <p>J'ai déja un compte</p>
                        <div class="form-connexion-flex">
                            
                            <div>
                                <label for="">Mon addresse email</label>
                            </div>
                            <div>
                                <input type="email" required="required"> 
                            </div>
                                                    
                        </div>
                        <div class="vertical-line"></div>
                        <div class="form-connexion-flex">
                            <div>
                                <label for="">Mon mot de passe</label>
                            </div>
                            <div>
                                <input type="password" required="required"> 
                            </div>
                        </div>
                        <div class="vertical-line"></div>

                        <div class="form-connexion-flex">
                            <button type="submit" class="button">Se connecter</button>
                            <a href="#">J'ai oublier mon mot de passe</a>
                        </div> 
                    </fieldset>

                    <fieldset>
                        <p>Je n'ai pas de compte</p> 
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
            <form action="../App/Controllers/registercontroller.inc.php" method="post">
                <fieldset>
                    <p>Informations personnelle</p>
                    
                    <div class="form-connexion-flex">
                        <div>
                            <label for="lastname">Nom</label>
                        </div>
                        <div>
                            <input type="text" name="lastname" id="lname" required="required"> 
                        </div>
    
                    </div>
                    <div class="vertical-line"></div>
                    <div class="form-connexion-flex">

                        <div>
                            <label for="firstname">Prénom</label>
                        </div>
                        <div>
                            <input type="text" name="firstname" id="fname" required="required"> 
                        </div>   

                    </div>
                    <div class="vertical-line"></div>
                    <div class="form-connexion-flex">
                        
                        <div>
                            <label for="username">Nom d'utilisateur</label>
                        </div>
                        <div>
                            <input type="text" name="username"  id="utilisateur" required="required"
                            > 
                        </div>
                        
                    </div>
                    <div class="vertical-line"></div>
                    <div class="form-connexion-flex">
                        
                        <div>
                            <label for="email">Email</label>
                        </div>
                        <div>
                            <input type="email" required= "required" name="email" id="email"> 
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
                            <input type="password" required="required" name="pwd" id="password"> 
                        </div>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="form-connexion-flex">
                        <div>
                            <label for="c_pwd">Confirmer mot de passe</label>
                        </div>
                        <div>
                            <input type="password" required="required" 
                            name="c_pwd" id="passwordconf"> 
                        </div>
                    </div>
                    <div class="vertical-line"></div>
    
                    <div class="form-connexion-flex">
                        <button type="submit" class="button" name="inscription" id="submit"  >S'inscrire</button>
                        <a href="#" id="redirect_connexion">J'ai déja un compte </a>

                    </div>
                
                </fieldset>
            </form>
    
        </div>
    </div>
        
        <main>
            <section class="beforpre ">
                <h3>AOC 24B1XHS</h3>
                <div class="item">
                    <a href="">Présentation</a>
                    <a href="">Desciptif</a>
                    <a href="">Caractéristiques techniques</a>
                </div>
            </section>

            <section class="presentation">
                <h3>Présentation</h3>
                <div class="etiquettes">
                    <p>1920 x 1080 pixels</p>
                    <p>7 ms</p>
                    <p>Format large 19/9</p>
                    <p>Dalle IPS</p>
                    <p>HDMI</p>
                    <p>vga</p>
                    <p>Noir</p>
                </div>

                <div class="pictures">
                    <div class="container">
                        <img src="images/product-1/slide-1-lg.jpg" alt="picture-1">
                    </div>
                    <h4 class="center">Photos non contractuelles</h4>
                    <div class="mini-picture">
                        <img src="images/product-1/slide-1-md.jpg" alt="">
                        <img src="images/product-1/slide-2-md.jpg" alt="">
                        <img src="images/product-1/slide-3-md.jpg" alt="">
                        <img src="images/product-1/slide-4-md.jpg" alt="">
                        <img src="images/product-1/slide-5-md.jpg" alt="">
                    </div>

                    <div id="open-modal-picture" class="modalPicture">
      
                        <div>   
                            <a href="#close" title="Close" class="closebtn" id="closebtn">
                                <svg xidth= "" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="images_block_moddal">               
                                <div class="images_zone">
                                        <p>AOC 24B1XHS</p>
                                        <img src="images/product-1/slide-1-lg.jpg"  alt="">
                                        <img src="images/product-1/slide-2-lg.jpg"  alt="">
                                        <img src="images/product-1/slide-3-lg.jpg"   alt="">
                                        <img src="images/product-1/slide-4-lg.jpg"  alt="">
                                        <img src="images/product-1/slide-5-lg.jpg"  alt="">
                                </div>                  
                                <div id="container_modal">
                                        <img  src="images/product-1/slide-1-lg.jpg" id="modal_image" alt="">
                                </div>
                            
                            </div>

                        </div>
                    </div>
                </div>

                <div class="marque">
                    <h4>Marque: AOC</h4>
                   <div>
                        <div>
                            <div>109€94 <span>dont eco-participation 1€70</span></div>
                            <button id='addBtn'>Ajouter au panier</button>
                            <button id='likeBtn'>Ajouter à ma liste d'envie</button>
                        </div>
                        <div>Garantie:2 années vendeur
                        </div>    
                   </div>
                   <div class="feature">
                        <p>Un écran 23,8" Full HD et sans bords; c'est sûrement votre futur moniteur pour la maison ou le bureau. AOC vous propose le 24B1XHS, un produit élégant au look doté d'une dalle VA avec un temps de réponse rapide de 7 ms en résolution 1920 x 1080 pixels. Cet écran WLED très fonctionnel offre un contenu avec un fréquence de 60 Hz, idéal pour tous les usages du quotidien.</p>
                        <ul>
                            <li> Écran large de 23.8" avec résolution Full HD (1920 x 1080)</li>
                            <li> Des couleurs riches et nuancées avec un contraste dynamique de 20.000.000:1 (typique 1000:1)</li>
                            <li> Temps de réponse de 7 ms</li>
                            <li> Dalle IPS</li>
                            <li> Luminosité 250 cd/m²</li>
                            <li> Modes Flicker-Free et Anti-lumière bleue (Low blue mode)</li>
                            <li> Connecteurs : HDMI 1.4, VGA </li>
                            <li> Design sans contour & profil plat </li>
                            <li> Consommation d'énergie modeste : 25 Watts </li>
                            <li> Dimensions (avec support) : 419.8 x 540.1 x 186.8 mm</li>
                            <li> Poids : 2.48 kg</li>
                        </ul>
                   </div>
                </div>
            </section>
            <section class="description">
                <h3>Descriptif</h3>
                <h4>Un moniteur Full HD performant et tout en finesse</h4>
                <div class="description_picture1">
                    <div class="first">
                        <img src="images/product-1/screen.png" alt="">
                    </div>
                    <p>
                        Issu de la série B1, le moniteur AOC 24B1XHS dispose de tous les atouts indispensables pour offrir une expérience utilisateur agréable. Son écran Full HD de 23.8" s'accompagne d'une dalle IPS ainsi que d'un temps de réponse de 7 ms pour une image toujours performante. Aussi, le 24B1XHS séduit par son profil plat et son design sans contour qui favorise le plaisir visuel et l'immersion. Ce moniteur WLED trouvera facilement une place de choix sur votre bureau pour toutes vos utilisations quotidiennes.
                    </p>
                </div>
                <h4>Appréciez le design sans contour</h4>
                <div class="description_picture2">
                    <div>
                        <img src="images/product-1/desc-1.jpg" alt="">
                    </div>
                    <div>
                        <p>
                            En plus du look moderne et attrayant qu'il procure, le design sans contour permet des configurations à plusieurs écrans sans interruption. Votre curseur, vos fenêtres ne sont plus perdus dans les abysses sombres des contours lorsque plusieurs écrans sont placés les uns à côté des autres.
                        </p>
                        <p>
                            Le profil plat de ce moniteur AOC offre de nombreux avantages. Très élégant sous tous les angles, il devient un choix idéal dans les espaces publics. Sa finesse et sa conception moderne lui permettent d'occuper moins de place sur le bureau.
                        </p>
                    </div>
                </div>
                <h4>Tout le confort nécessaire</h4>
                <div class="description_picture3">
                    <div>
                        <img src="images/product-1/desc-2.jpg" alt="">
                    </div>
                    <div>
                        <p>
                            Agréable visuellement et intuitif, ce moniteur dispose également d'une dalle IPS. Cette dernière reproduit des couleurs éclatantes et offre de très larges angles de vue. De cette façon, les images gardent toujours un excellent aspect et une parfaite précision, quel que soit l'angle auquel vous regardez l'écran. 
                        </p>
                        <p>
                            Vous voulez utiliser votre écran même dans un environnement très lumineux, à côté d'une fenêtre au soleil par exemple ? La haute luminosité de 250 cd/m² garantit une bonne visibilité, même dans des conditions difficiles.
                        </p>
                    </div>
                </div>
            </section>
            <section class="caracteristique">
                <h3>Caractéristiques techniques</h3>
                <div>
                    <h4>Affichage</h4>

                    <table>
                        <tr>
                            <td>Taille de l'écran</td>
                            <td>23.8 pouces</td>
                        </tr>
                        <tr>
                            <td> Format de l'écran</td>
                            <td>16/9</td>
                        </tr>
                        <tr>
                            <td>Type de Dalle</td>
                            <td>Dalle IPS</td>
                        </tr>
                        <tr>
                            <td>Technologie LCD</td>
                            <td>IPS</td>
                        </tr>
                        <tr>
                            <td>Résolution Max</td>
                            <td>1920 x 1080 pixels</td>
                        </tr>
                        <tr>
                            <td>Dot Pitch</td>
                            <td>0.2745 mm</td>
                        </tr>
                        <tr>
                            <td>Luminosité</td>
                            <td>250 cd/m²</td>
                        </tr>
                        <tr>
                            <td>Contraste</td>
                            <td>20000000 /1</td>
                        </tr>
                        <tr>
                            <td>Temps de réponse</td>
                            <td>7 ms</td>
                        </tr>
                        <tr>
                            <td>Angle de vision (horizontal)</td>
                            <td>178 Degré(s)</td>
                        </tr>
                        <tr>
                            <td>Angle de vision (vertical)</td>
                            <td>178 Degré(s)</td>
                        </tr>
                        <tr>
                            <td>Dalle mate/antireflets</td>
                            <td>Oui</td>
                        </tr>
                        <tr>
                            <td>NVIDIA G-SYNC</td>
                            <td>Non</td>
                        </tr>
                        <tr>
                            <td>Adaptive-Sync</td>
                            <td>Non</td>
                        </tr>
                        <tr>
                            <td>AMD FreeSync</td>
                            <td>Non</td>
                        </tr>
                        <tr>
                            <td>Anti-lumière bleue</td>
                            <td>Oui</td>
                        </tr>

                    </table>
                </div>

                <div>
                    <h4>Ecran</h4>
                    <table>
                            <tr>
                                    <td>Type d'écran</td>	
                                    <td>LED</td> 

                                </tr>
                                <tr>
                                    <td>Ecran large</td>	
                                    <td>Oui</td> 

                                </tr>
                                <tr>
                                    <td>Ecran incurvé</td>	
                                    <td>Non</td> 

                                </tr>
                                <tr>
                                    <td>Borderless</td>	
                                    <td>Oui</td> 

                                </tr>
                                <tr>
                                    <td>Compatible 3D</td>	
                                    <td>Non</td> 

                                </tr>
                                <tr>
                                    <td>Ecran tactile</td>	
                                    <td>Non</td> 

                                </tr>
                                <tr>
                                    <td>Fréquence verticale mini</td>	
                                    <td>60 Hz </td>

                                </tr>
                                <tr>
                                    <td>Type d'activités</td>	
                                    <td>Bureautique 

                                </tr>
                    </table>
                </div>

               <div>
                    <h4>Ergonomie</h4>
                    <table>
                            <tr> 
                                <td>Pivot </td>
                                <td>Non</td>
                            </tr>	
                            <tr> 
                                <td>Pied réglable en hauteur</td>
                                <td>Non</td>
                            </tr> 	
                            <tr> 
                                <td>Pied amovible</td>
                                <td>Oui</td>
                            </tr> 	
                            <tr> 
                                <td>Fixation VESA </td>
                                <td>N/A</td>
                            </tr>	
                            <tr> 
                                <td>Angle inclinaison vers l'arrière (haut) </td>
                                <td>21.5 Degré(s)</td>
                            </tr>	
                            <tr> 
                                <td>Angle inclinaison vers l'avant (bas)</td>
                                <td>3.5 Deg</td>
                            </tr>
                        </table> 
               </div>	

                <div>
                    <h4>Connectique</h4>
                    <table>
                        <tr> 
                            <td>Entrées vidéo</td>
                            <td>1 X HDMI Femelle 1 X VGA (D-sub 15 Femelle)</td>
                        </tr> 	
                        <tr> 
                            <td>Entrée audio</td>
                            <td>Aucun(e)</td>
                        </tr> 	
                        <tr> 
                            <td>Sorties audio</td>
                            <td>1 X Line OUT (Jack 3.5mm Femelle)</td>
                        </tr>
                    </table>
                </div> 	

                <div>
                    <h4>Multimédia</h4>
                    <table>
                        <tr> 
                            <td>H.P. Intégrés</td>
                            <td>Non</td>
                        </tr> 	
                        <tr> 
                            <td>Webcam</td>
                            <td>Non</td>
                        </tr> 	
                        <tr> 
                            <td>Tuner TV</td>
                            <td>Non</td>
                        </tr> 	
                    </table>
                </div>
            
                <div>
                    <h4>Caractéristiques physiques</h4>
                    <table>
                        <tr> 
                            <td>Couleur</td>
                            <td>Noir</td>
                        </tr> 	
                        <tr> 
                            <td>Largeur</td>
                            <td>540.1 mm</td>
                        </tr> 	
                        <tr> 
                            <td>Hauteur</td>
                            <td>417.4 mm</td>
                        </tr> 	
                        <tr> 
                            <td>Profondeur</td>
                            <td>186.8 mm</td>
                        </tr> 	
                        <tr> 
                            <td>Poids</td>
                            <td>2.48 kg</td>
                        </tr> 	
                        <tr> 
                            <td>Pack multi-écrans</td>
                            <td>Non</td>
                        </tr> 	
                    </table>
                </div>

                <div>
                    <h4>Alimentation</h4>
                    <table>
                        <tr> 
                            <td>Consommation</td>
                            <td>25 W</td>
                        </tr> 	
                        <tr> 
                            <td>Consommation en veille</td>
                            <td>0.5 W</td>
                        </tr> 	
                        <tr> 
                            <td>Alimentation interne</td>
                            <td>Non</td>
                        </tr>
                    </table>
                </div>     	     	
                
            </section>
            
        </main>
        <footer class="center">

            <nav class="navbar">
                <ul>
                    <li>
                        <a href="">
                            <svg width="25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                            </svg>
                                    
                                Ordinateurs
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg width="25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>
            
                                    Périphériques & composants
            
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg  width="25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>
                                    
                                    Téléphones
                                    
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg width="25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                                    
                                        Objets connectés
                        </a>
                    </li>
                </ul>
            </nav>
            
            <h2>Moyens de paiement</h2>
            <!-- Trouver une alternative pour la source -->
            <div class="parent flex ">
                <img id="first" width="1" height="1" style="border-radius: 5px">
                <img id="second" width="1" height="1" style="border-radius: 5px">
                <img id="third" width="1" height="1" style="border-radius: 5px">
                <img id="fourth" width="1" height="1" style="border-radius: 5px">
            </div>

            <h2>Sur les réseaux sociaux</h2>
            <div>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill=#555 class="svg"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a>

                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill=#555 class="svg"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>

                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill=#555 class="svg"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a>

                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill=#555 class="svg"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
            </div>

            <h2>A propos</h2>
            <div class="flex flink">
                <a href="#">Qui sommes-nous?</a>
                <a href="#">Nos services</a>
                <a href="#">Contactez-nous</a>
            </div>
        </footer>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>