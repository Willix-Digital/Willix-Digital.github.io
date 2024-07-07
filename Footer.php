<footer>
        <div class="sections-footer">
            <div class="footpart1">
                <div class="page-section">
                    <h1>Nos pages</h1>
                    <div class="linkpage">
                        <a href="./index.html">Acceuil</a>
                        <a href="#a-propos">A propos</a>
                        <a href="#services">Services</a>
                        <a href="#Portfolio">Portfolio</a>
                        <a href="./contact">Nous contacter</a>
                    </div>
                </div>
                <div class="Apropos-section">
                    <h1>Willix Digital</h1>
                    <p>
                        Chez Willix Digital, nous concrétisons vos ambitions en ligne. Experts en développement web, design et stratégies digitales, nous atteignons vos objectifs. Donnez vie à votre vision digitale maintenant.                    
                    </p>
                    <div class="social-icones">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="Horraire-section">
                    <h1>Nos prestations :</h1>
                    <div class="listesprestations">
                        <a href="">Logo </a>
                        <a href="">Cartes PVC<a>
                        <a href=""> Affiche / Posters</a>
                        <a href="">Conception graphique</a>
                        <a href="">Création desite web</a>
                    </div>
                </div>
                <div class="Contact-section">
                    <h1>Nous contacter</h1>
                    <a href=""><i class=" fac fa-solid fa-location-dot"></i>Rabat Maroc</a><br>
                    <a href=""><i class=" fac fa-solid fa-phone"></i>+241 76481356</a><br>
                    <a href=""><i class=" fac fa-brands fa-whatsapp"></i>+241 76481356</a>
                </div>
                <div class="Legal-section">
                    <h3>Copyright © 2024 Willix Digital. Tous droits réservés. </h3>
                    <div class="legallink">
                        <a href="#">Conditions d'utilisation </a>
                        <a href="#">Mensions Légals</a>
                        <a href="#">Politique de confidentialité</a>
                        <a href="#">Gestion des cookies</a>
                    </div>
                </div>
                <div class="map-section">
                    <div class="form-container">
                        <form class="form" action="send_email.php" method="POST">
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                          </div>
                          <div class="form-group">
                            <label for="textarea">En quoi pouvons nous vous aider</label>
                            <textarea name="textarea" id="textarea" rows="10" cols="50" required></textarea>
                          </div>
                          <button class="form-submit-btn" type="submit">Envoyé l'email</button>
                        </form>
                      </div>                               
                </div>
            </div>
        </div>
</footer>



<style>


/*!
=======================================================================
     *Footer
=======================================================================
*/

footer{
  height: 600px;
  width: 100vw;
  max-width: 100%;
  background-color: #29294a;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  padding: 10px 0;
  color: white;
  margin: 0 auto;
  font-family: 'Montserrat';
  font-size: 18px;
  position: relative;
  left: 0;
  bottom: 0;
  color: white;
  text-align: center;
}

footer h1 {
  font-size: 25px;
  margin-bottom:15px;
}
a{
color: white;
  text-decoration: none;
}
.sections-footer{
  max-width: 1700px;
}
.footpart1{
  display: grid;
  width: 95vw;
  max-width: 1700px;
  margin:20px auto;
  grid-template-columns: repeat(5 ,1fr);
  grid-template-rows: 1fr 3fr 1fr;
  grid-row-gap: 10px;
  grid-column-gap: 30px;
}
.page-section{
  position: relative;
  text-align: center;
  grid-area: 1/1/1/4;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  color: white;
  border-bottom: 1px solid white;
}
.page-section h1{
  width: 100%;
  text-align: left;
  font-size: 25px;
}
.linkpage{
  position: relative;
  width: 100%;
  text-align: left;
  padding-bottom: 20px;
}
.linkpage a{
  color: white;
  margin-right: 20px;
  padding-bottom:5px;
  transition: all 0.2s ease-in-out;
}
.linkpage a:hover{
  color: #d4adfc;
}
.Apropos-section{
  position: relative;
  text-align: center;
  grid-area: 3/1/2/2;
  text-align: left;
  color: white;
}
.Apropos-section h1{
  font-family: "National Park";
  margin-bottom:15px;
}
.Apropos-section a {
  padding: 20px 25px 20px 0;
  transition: 0.1s ease;
}
.Apropos-section i:hover {
  color:#d4adfc;
}
.Horraire-section{
  position: relative;
  text-align: left;
  color: white;
  grid-area: 3/2/2/2;
}

.listesprestations{
  display: flex;
  flex-wrap: nowrap;
  gap: 5px;
  flex-wrap: wrap;
}

.listesprestations a{
  width: 100%;
  transition: all 0.2s ease-in-out;
}

.listesprestations a:hover{
  color: #d4adfc;
}


.Contact-section{
  position: relative;
  grid-area: 3/3/2/4;
  text-align: center;
  color: white;
  text-align: left;
}

.Contact-section i{
  padding-right: 20px;
  margin-bottom: 20px;
}

.Contact-section a{
  width: 100%;
}

.Legal-section{
  position: relative;
  grid-area: 3/1/4/6;
  color: white;
  border-bottom: 1px solid white;
  border-top: 1px solid white;
  display: flex;
  flex-wrap: nowrap;
  justify-content: space-between;
  align-items: center;
}

.Legal-section h3{
  width: 30%;
  font-size: 18px;
  font-weight: lighter;
  text-align: left;
}

.legallink{
  display: inline-flex;
  gap: 20px;
  justify-content: flex-end;
  align-items: center;
  margin: auto;
  width: 70%;
}
.legallink a {
  font-size: 18px;
  text-align: center;
  transition: all 0.2s ease-in-out;
}

.legallink a:hover {
  color: #d4adfc;
}

.map-section{
  text-align: center;
  grid-area: 1/4/3/6;
}

.social-icones{
  width: 50%;
  display: flex;
  justify-content: space-between;
  color: white;
}
.social-icones i{
  color: white;
  font-size: 20px;
}

.form-container {
  position: relative;
  width: 100%;
  height: 100%;
  background: white;
  border: 2px solid transparent;
  padding: 32px 24px;
  font-size: 14px;
  font-family: inherit;
  color: white;
  display: flex;
  flex-direction: column;
  gap: 20px;
  box-sizing: border-box;
  border-radius: 16px;
}

.form-container button:active {
  scale: 0.95;
}

.form-container .form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-container .form-group {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.form-container .form-group label {
  display: block;
  margin-bottom: 5px;
  color: black;
  font-weight: 700;
  font-size: 18px;
  text-align: left;
}

.form-container .form-group input {
  width: 90%;
  padding: 12px 16px;
  border-radius: 8px;
  color: black;
  font-family: inherit;
  background-color: transparent;
  border: 1px solid #414141;
}

.form-container .form-group textarea {
  width: 90%;
  padding: 12px 16px;
  border-radius: 8px;
  resize: none;
  color: black;
  height: 96px;
  border: 1px solid #414141;
  background-color: transparent;
  font-family: inherit;
}

.form-container .form-group input::placeholder {
  opacity: 0.5;
}

.form-container .form-submit-btn {
  display: flex;
  align-items: flex-start;
  justify-content: center;
  align-self: flex-start;
  font-family: inherit;
  color: white;
  font-weight: 600;
  width: 40%;
  background: #29294a;
  padding: 12px 16px;
  font-size: inherit;
  gap: 8px;
  margin-top: 8px;
  cursor: pointer;
  border-radius: 6px;
  transition: all 0.3s;
}

.form-container .form-submit-btn:hover {
  background-color: #d4adfc;
  border-color: #fff;
}



@media screen and (max-width:1440px) {
    /*!
    =======================================================================
        *Footer
    =======================================================================
    */
    footer{
        padding: 20px auto;
        height: auto;
      }

      .footpart1{
        height: auto;
        margin: 10px auto;
        grid-template-rows:1fr 2fr 1fr; 
      }

      .page-section{
        grid-area: 1/3/2/3;
        border: none;
      }

      .linkpage{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding-bottom: 20px;
      }

      .linkpage a{
        color: white;
        width: 100%;
      }

      .Apropos-section{
        grid-area: 1/1/2/3;
      }

      .Apropos-section a{
        padding-top: 10px;
      }

      .Horraire-section{
        grid-area: 1/4/2/4;
      }

      .Contact-section{
        grid-area: 1/5/2/5;
      }

      .Legal-section{
        grid-area: 3/1/4/6;
      }

      .map-section{
        grid-area: 2/1/3/6;
        height: 400px;
      }
}

@media screen and (max-width:1240px) {
            /*!
    =======================================================================
        *Footer
    =======================================================================
    */
    .footpart1{
        grid-template-columns: repeat(4 ,1fr);
        grid-template-rows: repeat(4 ,1fr);
      }
      .page-section{
        grid-area: 2/2/4/2;
        display: block;
      }
      .linkpage{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding-bottom: 20px;
      }
      .linkpage a{
        color: white;
        width: 100%;
      }
      .Apropos-section{
        grid-area: 1/1/2/3;
      }
      .Horraire-section{
        grid-area: 1/3/2/6;
      }
      .Contact-section{
        grid-area: 2/1/4/2;
      }
      .Legal-section{
        grid-area: 4/1/4/6;
      }
      .map-section{
        grid-area: 1/3/4/6;
      }

}

@media screen and (max-width:1100px) {
    /*!
    =======================================================================
        *Footer
    =======================================================================
    */
    .footpart1{
        grid-template-columns: repeat(2 ,1fr);
        grid-template-rows: repeat(4 ,1fr);
        height: auto;
        max-width: 90vw;
        margin: 0 auto;
      }
      .Apropos-section{
        grid-area: 1/1/0/2;
        margin-top: 20px;
      }
      .page-section{
        grid-area: 2/1/2/3;
    }
    .social-icone{
        margin-top: 20px;
    }

      .legallink{
        display: flex;
        gap: 20px;
        justify-content: flex-end;
        align-items: center;
        flex-wrap: wrap;
        margin: auto;
        width: 50%;
    }

    .linkpage a{
        color: white;
    }

    .Horraire-section{
        grid-area: 3/1/3/3;
    }

    .Contact-section{
        grid-area: 4/1/4/3;
        height: 50px;
    }

    .Legal-section{
        grid-area: 6/1/6/3;
        text-align: center;
        height: auto;
        flex-wrap: wrap;
    }
    
    .legallink{
        display: inline-flex;
        gap: 20px;
        justify-content: flex-end;
        align-items: center;
        flex-wrap: wrap;
        margin: auto;
        width: 100%;
        font-size: 108x;
        margin: 20px 0;
    }

    .Legal-section h3{
        width: 100%;
        font-size: 18px;
        margin: 20px 0;
        text-align: center;
    }

    .Legal-section a{
        width: 100%;
        text-align: left;
        font-size: 18px;
    }

    .map-section{
        grid-area: 5/1/5/4;
    }

    .linkpage a{
        border-bottom:0px ;
        width: 100%;
    }

    .social-icones{
        margin: 20px 0;
        width: 100px;
        display: flex;
        justify-content: space-between;
        color: white;
    }

    .linkpage a:hover{
        border-bottom:0px ;
    }
}

</style>







