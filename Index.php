<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Willix Digital</title>

    <link href="./Images/Logo curv - big.png" rel="icon">

    <!-- Font Awesome -->
    <script defer src="https://kit.fontawesome.com/2b1a7acadb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <!-- Font Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="./Style/Font.css">
    <link rel="stylesheet" href="./Style/Style.css">
    <link rel="stylesheet" href="./Style/Responsive.css">

    <!-- Librerie Js -->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

</head>

<body>
    <header>
        <?php require 'navbar.php' ;?>
        
        <div class="head-text ">
            <div class="txt-zone">
                    <h1 id="tp" >Votre agence de <span>création visuelle</span> et de design créatif</h1>
                    <h3 class="tiret1"></h3>
                    <p id="secondp" >Bienvenue chez <span> Willix Digital</span>, où créativité et précision animent vos projets visuels. Spécialisés en maquettes, logos, affiches et posters, nous transformons vos idées en œuvres d'art.</p>
                    <p id="firstp"><a href="">Maquettes</a><a href="">Affiches</a><a href="">Cartes PVC</a><a href="">Poster</a><a href="">Logo</a></p>
                    <ul id="socialslinks">
                        <a href=""><i class="fa-brands fa-twitter fa-2x"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-facebook fa-2x"></i></a>
                        <a href="https://github.com/Willix-Digital"><i class="fa-brands fa-github fa-2x"></i></a>
                        <a href="https://www.instagram.com/willixdigital/"><i class="fa-brands fa-instagram fa-2x"></i></a>
                    </ul>
            </div>
            <div class="imglogohead"><img src="./Images/LOGO SVG CURV.svg" class="logohead"></div>
        </div>
    </header>



    <section class="a-propos " id="a-propos">
        <div id="zone-spétial">
            <div class="spétial-txt ">
                <h1>Votre Partenaire Numérique de <span>Confiance</span></h1>
                <h3 class="tiret"></h3>
                <p>
                    Chez Willix Digital, nous sommes votre allié pour concrétiser vos ambitions en ligne. Spécialistes du développement web, design graphique et stratégies digitales, nous vous guidons à chaque phase.
                    <span class="more-text">Que ce soit pour établir une présence en ligne, créer des applications innovantes ou renforcer votre visibilité, nous nous engageons à atteindre vos objectifs avec efficacité. Découvrez comment donner vie à votre vision digitale dès maintenant.</span> 
                    <span class="show-more" onclick="toggleText()">Lire la suite</span>
                </p>
                <button class="btn">NOUS CONTACTER</button>
            </div>
            <div class="spétial-img">
                    <img src="./Images/bg04.jpg">
            </div>
        </div>
    </section>


    <section id="accompagnement">
        <div class="acc">
            <p class="accompagnement-txt">
                Nous accompagnons les entreprises à accroitre leurs visibilité
            </p>
            <ul class=" acc-itms">
                <li><h1 class="prc1 stat1" data-value="80" >0%</h1><p>D'augmentation de la visibilité en ligne</p></li>
                <li><h1 class="prc2 stat2" data-value="90" >0%</h1><p>D'augmentations des clients</p></li>
                <li><h1 class="prc3 stat3" data-value="100">0%</h1><p>De clients satisfait</p></li>
                <li><h1 class="prc4 stat4" data-value="53" >0%</h1><p>Made in Gabon.</p></li>
            </ul>
        </div>
    </section>


    <section class="services " id="services">
        <div id="zone-spétial2">
            <div class="services-txt ">
                <h1>Nos <span>services</span></h1>
                <h3 class="tiret"></h3>

                <p>
                    Chez Willix Digital, nous sommes votre allié pour concrétiser vos ambitions en ligne. Spécialistes du développement web, design graphique et stratégies digitales, nous vous guidons à chaque phase. 
                    <span class="more-text2">Que ce soit pour établir une présence en ligne, créer des applications innovantes ou renforcer votre visibilité, nous nous engageons à atteindre vos objectifs avec efficacité. Découvrez comment donner vie à votre vision digitale dès maintenant.</span>            
                    <span class="show-more2" onclick="toggleText2()">Lire la suite</span>
                </p>
            </div>
            <div class="services-img">
                    <img src="./Images/bg01-1.jpg">
            </div>
        </div>
        <div class="services-itms">
            <div class="service1">
                <a href="#">
                    <i class="fa-solid fa-pen-to-square"></i>   
                    <h3>Affiche , Poster.</h3>                 
                    <h1>Graphic Design</h1>
                    <p>Élevez votre image de marque avec un design graphique sur mesure, parfaitement adapté à vos besoins et à votre vision.</p>
                </a>
            </div>
            <div class="service2">
                <a href="#">
                    <i class="fa-solid fa-laptop"></i> 
                    <h3>Cite web.</h3>                                    
                    <h1>Développement Web</h1>
                    <p>
                        Développez votre présence en ligne avec un site web sur mesure, conçu pour répondre à vos besoins et accompagner votre croissance. <span class="more-text">Profitez de notre expertise pour propulser votre entreprise vers de nouveaux sommets.</span>
                    </p>
                    
                </a>
            </div>
            <div class="service3">
                <a href="#">
                    <i class="fa-regular fa-lightbulb"></i> 
                    <h3>Logo.</h3>                                    
                    <h1>Brand Design</h1>
                    <p>Renforcez votre image de marque avec un design sur mesure, parfaitement adapté à vos besoins et à votre vision.</p>
                </a>
            </div>
        </div>
    </section>
    
    <?php require 'Footer.php' ;?>

    <script src="./Script.js"> </script>
</body>

</html>