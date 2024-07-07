<nav class="navbar " id="navbar">
            <div class="ma-nav">
                <h1><a href="./Index.php" class="logotxt" id="logo">Willix <span>Digital</span></a></h1>
                <a href="./Index.php" id="logo" class="logoimg"><img src="./Images/2.svg" height="120px" width="120px"></a>
                <ul class="navlinks">
                    <span class="close-btn material-symbols-rounded">close</span>
                    <a href="./Index.php" class="link-item">Acceuil</a>
                    <a href="#a-propos" class="link-item">A propos de nous</a>
                    <a href="#services" class="link-item">Services</a>
                    <a href="./Porfolio.php" class="link-item">Portfolio</a>
                    <a href="#" class="link-item">Nous contacter</a>
                </ul>
                <span class="hamburger-btn material-symbols-rounded">menu</span>
            </div>
</nav>



<script>
  /*!
=================================================================================================================================
     *Responsive Nav Bar
=================================================================================================================================
*/

const navbarMenu = document.querySelector(".navlinks ");
const hamburgerBtn = document.querySelector(".hamburger-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const linksNavBar = document.querySelector(".links");

function toggleMenu() {
  navbarMenu.classList.toggle("show-menu");
}

hamburgerBtn.addEventListener("click", () => {
  navbarMenu.classList.toggle("show-menu");
});

hideMenuBtn.addEventListener("click", () => hamburgerBtn.click());

// Ajouter des événements de clic à tous les éléments de la barre de navigation
document.querySelectorAll(".navlinks .link-item").forEach(item => {
  item.addEventListener("click", toggleMenu);
});


/*!
=======================================================================
 *Gestion du changement de style de la barre de navigation lors du défilement
=======================================================================
*/

window.addEventListener("scroll", function () {
    var navbar = document.getElementById("navbar");
    var navLinks = document.querySelectorAll(".navlinks a");
    var logoLink = document.querySelector(".navbar h1 span");
    var logoImg = document.querySelector(".logoimg");
    var logoTxt = document.querySelector(".logotxt");
    var hamburgerBtn = document.querySelector(".hamburger-btn");

    var scrolled = window.scrollY > 8; // 3mm de défilement
  
    if (scrolled) {
      logoImg.classList.add("visible");
      logoTxt.classList.add("invisible");
      hamburgerBtn.classList.add("color");
    } else {
        logoImg.classList.remove("visible");
        logoTxt.classList.remove("invisible");
        hamburgerBtn.classList.remove("color");
    }

    if (scrolled) {
      navbar.classList.add("scrolled");
      navLinks.forEach(function (link) {
        link.classList.add("scrolled");
      });
      logoLink.classList.add("scrolled");
      loginBtn.classList.add("scrolled");
      navbar.classList.add("color");
    } else {
      navbar.classList.remove("scrolled");
      navLinks.forEach(function (link) {
        link.classList.remove("scrolled");
      });
      logoLink.classList.remove("scrolled");
      loginBtn.classList.remove("scrolled");
      navbar.classList.remove("color");
    }
  });
</script>








<style>

/*!
=======================================================================
     *GENERAL
=======================================================================
*/
* {
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style: none;
    /*border: 1px solid #d4adfc;*/
}

.tiret , .tiret1{
    width :20%;
    display: bloc;
    margin-top: -20px;
    margin-bottom: 20px;
    border-bottom : 3px solid #d4adfc;
 }

html {
  scroll-behavior: smooth;
}

body {
  opacity: 1;
  background-color: white;
  position: relative;
  font-family: 'Montserrat';
  position: relative;
}
img{
  border-radius: 15px;
}
.trait{
  color: #d4adfc;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  margin-top: -35px;
}

.darkcolor{
  color: #05051d;
  transition: all 0.3s;
}

.clearcolor{
  color: #d4adfc;
  transition: all 0.3s;
}

.whitecolor{
  color: white;
  transition: all 0.3s;
}

.whitebg{
  background-color: white;
}

/*!
=======================================================================
     *NAV BAR
=======================================================================
*/

nav {
    width: 100vw;
    max-width: 100%;
    height: 65px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    gap: 30px;
    right: 0;
    left: 0;
    top: 0;
    margin: 0 auto;
    z-index: 999999;
}

.ma-nav{
  max-width: 1700px;
  width: 85vw;
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 999999;
  margin: 10px auto;
  position: relative;
}

.navlinks{
    display: flex;
    justify-content: space-around;
    gap: 10px;
    text-align: center;
}

.navlinks a{
    font-weight: 600;
    font-size: 18px;
    transition: all 0.3s;
    border-bottom: 1px solid transparent;
    padding-bottom: 10px;
    padding: 0 10px;
    color: #05051d;
}

.navlinks a:hover{
    color: #d4adfc;
}

.navbar h1 a{
    color: black;
    font-size: 30px;
    font-family: 'National Park';
}

.logotxt {
  transition: opacity 0.2s ease, visibility 0.2s ease;
}

#logo span{
  color: #d4adfc;
}

.logoimg {
  transition: opacity 0.2s ease, visibility 0.2s ease;
  opacity: 0;
  visibility: hidden;
  position: absolute;
  left: -50px;
}

.logotxt.invisible {
  opacity: 0;
  visibility: hidden;
}

.logoimg.visible {
  opacity: 1;
  visibility: visible;
}

nav .close-btn {
  position: absolute;
  left: 20px;
  top: 10px;
  display: none;
  color: white;
  cursor: pointer;
  font-size: 40px;
}

nav .hamburger-btn {
  color: #05051d;  
  cursor: pointer;
  font-size: 40px;
  display: none;
}

.navbar.scrolled {
  background-color: #d4adfc;
}

.navlinks a.scrolled,.navbar h1 span.scrolled {
  color: black;
}

.navlinks a:hover.scrolled,#logo a.scrolled{
  border-bottom: 1px solid #000002;
}

@media screen and (max-width:1100px) {
    /*!
    =======================================================================
        *HEAD
    =======================================================================
    */ 
    .ma-nav{
        width: 100vw;
    }
    .navlinks {
        display: flex;
        position: absolute;
        flex-direction: column;
        justify-content: center;
        background-color: #d4adfc;
        transition: 0.3s ease;
        align-items: center;
        top: -20px;
        bottom: 0;
        width: 100vw;
        max-width: 100%;
        height: 120vh;
        max-height: 100vh;
        min-height: 100vh;
        gap: 40px;
        right: -2000px;
        margin: 0;
        padding: 0;
        z-index: 9;
    }

    .navlinks a:hover{
        color: white;
        border-bottom: 1px solid transparent;
    }

    #logo img{
        height: 120px;
        width: 120px;
    }

    .navlinks a{
        font-size: 20px;
        color: black;
    }

    .navbar h1 a{
        padding-left: 95px;
    }

    nav .hamburger-btn {
        display: block;
        top: 40px;
        padding-right: 95px;
    }

    .color{
        color: #05051d;  
    }

    .logoimg {
        left: 50px;
    }

    .show-menu {
        right: 0;
    }

    .navlinks  li a{
        font-size: 24px;
        padding-bottom: 6px;
        border-bottom: 1px solid transparent;
        transition: all 0.2s ease-in-out;
        text-align: left;
    }

    .navlinks  li a:hover{
        font-size: 24px;
        border-bottom: 1px solid white;
    }
      
    .navlinks  li a:hover .scrolled{
        font-size: 24px;
        border-bottom: 1px solid transparent;
    }

    nav .close-btn {
        right: 95px;
        left: 0px;
        top: 15px;
        display: block;
        position: absolute;
        text-align: right;
    }
      .navbar h1 a{
        font-size: 30px;
        font-weight: 600;
    }
}


@media screen and (max-width:790px) {
    /*!
    =======================================================================
        *HEAD
    =======================================================================
    */
    .navbar h1 a{
        padding-left: 35px;
        font-size: 24px;
    }
    nav .hamburger-btn {
        padding-right: 45px;
        font-size: 34px;
    }
    nav .close-btn {
        right: 35px;
        top: 11px;
      }
}



@media screen and (max-width:560px) {
    /*!
    =======================================================================
        *HEAD
    =======================================================================
    */   
    .navbar h1 a{
    padding-left: 35px;
    }

    nav .hamburger-btn {
        padding-right: 35px;
    }

    nav .close-btn {
        right: 35px;
    }

    .logoimg {
        left: -5px;
        padding-right: 20px;
    }

    .logoimg img{
        font-size: 20px;
        height: 20px;
        width: 20px;
    }
}
</style>