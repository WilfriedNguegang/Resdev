<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./image/hotel.png" />
    <title>Rooms Resa</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-hotel"></i> Rooms Resa </a>

        <nav class="navbar">
            <a href="#home">accueil</a>
            <a href="#products">Chambres</a>
            <a href="#categories">Catégories</a>
            <a href="#review">Commentaires</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>
        <div class="search-modal">
            <form action="" class="search-form">
                <input type="search" id="search-box" placeholder="search here...">
                <label for="search-box" class="fas fa-search"></label>
            </form>
        </div>




        <form action="../reservation.php" class="shopping-cart" method="post">
            <!-- formulaire -->
            <h3> Reservez maintenant</h3>
            <label>date d'entrée</label>
            <input type="date" name="dateA" placeholder="date de debut" id=""><br>
            <label>date de sortie</label>
            <input type="date" name="dateF" placeholder="date de fin" id="">
            <input type="email" placeholder="Email" class="box" name="email">
            <input type="text" placeholder="Nom(s)" class="box" name="nom">
            <input type="text" placeholder="Prenom(s)" class="box" name="prenom">
            <input type="text" placeholder="Téléphone" class="box" name="telephone">
            <div class="total"> cette reservation vous coutera : €59.69 </div>
            <input type="submit" value="Reservez maintenant" class="resabtn" name="submit">
        </form>


        <form action="../verification.php" class="login-form" method="post">
            <h3>login now</h3>
            <input type="email" placeholder="your email" class="box" name="email">
            <input type="password" placeholder="your password" class="box" name="password">
            <p>forget your password <a href="#">click here</a></p>
            <p>don't have an account <a href="../creation.php">create now</a></p>
            <input type="submit" value="Login Client" class="btn" name="submit">
            <input type="submit" value="Admin" class="btn" name="submitA">
        </form>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Trouvez <span>la chambre</span> qui vous convient!</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
            <a href="#" class="btn">Réservez dès maintenant!</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- products section starts  -->


    <section class="products" id="products">
        <h1 class="heading"> Nos <span>chambres</span> </h1>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">

                    <h3>Chambre Lit une place</h3>
                    <img src="image/bedroom-690129_640.jpg" alt="">
                    <div class="price"> €20.99 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" id="cart-btn">Réserver</a>
                </div>

                <div class="swiper-slide box">

                    <h3>Chambre Couple</h3>
                    <img src="image/hotel-room-1447201_640.jpg" alt="">
                    <div class="price"> €29.99 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" id="cart-btn1">Réserver</a>
                </div>

                <div class="swiper-slide box">

                    <h3>Suite</h3>
                    <img src="image/bed-4416515_1920.jpg" alt="">
                    <div class="price"> €50.99</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" id="cart-btn2">Réserver</a>
                </div>

                <div class="swiper-slide box">

                    <h3>Suite Moderne</h3>
                    <img src="image/image.jfif" alt="">
                    <div class="price"> €100</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" id="cart-btn3">Réserver</a>
                </div>

            </div>

        </div>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">

                    <h3>Avec balcon</h3>
                    <img src="image/krystal-cancun-habitacion-2.jpg" alt="">
                    <div class="price"> €64.99 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" id="cart-btn4">Réserver</a>
                </div>



                <div class="swiper-slide box">

                    <h3>Chambre Couple</h3>
                    <img src="image/bedroom-690129_640.jpg" alt="">
                    <div class="price"> €45</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" id="cart-btn5">Réserver</a>
                </div>

                <div class="swiper-slide box">

                    <h3>Chambre solo</h3>
                    <img src="image/bedroom-690129_640.jpg" alt="">
                    <div class="price"> €40.99</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" id="cart-btn6">Réserver</a>
                </div>

                <div class="swiper-slide box">

                    <h3>Chambre</h3>
                    <img src="image/bedroom-690129_640.jpg" alt="">
                    <div class="price"> €30.99</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a class="btn" id="cart-btn7">Réserver</a>
                </div>

            </div>

        </div>


    </section>

    <!-- products section ends -->

    <!-- categories section starts  -->

    <section class="categories" id="categories">

        <h1 class="heading"> Nos <span>Promotions</span> </h1>

        <div class="box-container">

            <div class="box">

                <h3>Une Pièce</h3>
                <img src="image/hotel-room-1447201_1920.jpg" alt="">
                <p>bénéficiez de 25% de réduction si vous reservez une semaine avant votre sejour</p>
                <a class="btn" id="cart-btn8" >Réserver</a>
            </div>

            <div class="box">

                <h3>Deux Pièces</h3>
                <img src="image/hotel-room-1447201_1920.jpg" alt="">
                <p>bénéficiez de 35% de réduction si vous reservez une semaine avant votre sejour</p>
                <a class="btn" id="cart-btn9">Réserver</a>
            </div>

            <div class="box">

                <h3>Trois Pièces</h3>
                <img src="image/hotel-room-1447201_1920.jpg" alt="">
                <p>bénéficiez de 60% de réduction si vous reservez une semaine avant votre sejour</p>
                <a class="btn" id="cart-btn10">Réserver</a>
            </div>

            <div class="box">
                <img src="image/krystal-cancun-habitacion-2.jpg" alt="">
                <h3>Suite</h3>
                <p>bénéficiez de 30% de réduction si vous reservez une semaine avant votre sejour</p>
                <a href="#" class="btn">Réserver</a>
            </div>

        </div>

    </section>

    <!-- categories section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> Quelques <span>Commentaires</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/pic-1.png" alt="">
                    <p>L'hôtel Arcadia à Lannion, une belle étape bretonne pour découvrir une région magnifique entre Trébeurden et Peros-Guirec. Charme colonial de cet établissement 3 étoiles où le repos est appréciable. Une pscine qui nous a permis de
                        nous reposer en fin de journée. A découvrir !.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-2.png" alt="">
                    <p>L'hôtel Arcadia à Lannion, une belle étape bretonne pour découvrir une région magnifique entre Trébeurden et Peros-Guirec. Charme colonial de cet établissement 3 étoiles où le repos est appréciable. Une pscine qui nous a permis de
                        nous reposer en fin de journée. A découvrir !.</p>
                    <h3>Elenna Murphy</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <p>L'hôtel Arcadia à Lannion, une belle étape bretonne pour découvrir une région magnifique entre Trébeurden et Peros-Guirec. Charme colonial de cet établissement 3 étoiles où le repos est appréciable. Une pscine qui nous a permis de
                        nous reposer en fin de journée. A découvrir !..</p>
                    <h3>Brice Grey</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-4.png" alt="">
                    <p>L'hôtel Arcadia à Lannion, une belle étape bretonne pour découvrir une région magnifique entre Trébeurden et Peros-Guirec. Charme colonial de cet établissement 3 étoiles où le repos est appréciable. Une pscine qui nous a permis de
                        nous reposer en fin de journée. A découvrir !.</p>
                    <h3>Elisa Taylor</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3> Rooms Resa <i class="fas fa-hotel"></i> </h3>
                <p>Se reposer autrement!</p>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                    <a href="https://twitter.com/?lang=fr" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/?hl=fr" class="fab fa-instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>Infos contact</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i> (+33)0755441122 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> (+33)0688993211  </a>
                <a href="#" class="links"> <i class="fas fa-envelope"></i> contactsroomsresa@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Limoges - 87000, France </a>
            </div>

            <div class="box">
                <h3>Liens rapides</h3>
                <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> accueil </a>
                <a href="#products" class="links"> <i class="fas fa-arrow-right"></i> chambres </a>
                <a href="#categories" class="links"> <i class="fas fa-arrow-right"></i> catégories </a>
                <a href="#review" class="links"> <i class="fas fa-arrow-right"></i> commentaires </a>
            </div>

            <div class="box">
                <h3>Newsletter</h3>
                <p>Souscrivez et profitez de nos dernières annonces! ;-) </p>
                <input type="email" placeholder="your email" class="email" name="email">
                <input type="submit" value="Souscrire" class="btn">
            </div>

        </div>

        <div class="credit"> Créé par<span> l'entreprise K2NTS </span> </div>

    </section>

    <!-- footer section ends -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>