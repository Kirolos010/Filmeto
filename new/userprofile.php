<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmeto</title>

    <link rel="icon" type="image/x-icon" href="2.png">
    <link rel="stylesheet" href="style_home.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/c7be939029.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


</head>

<body>

    <nav>
        <!-- <div class="nav_container"> -->
        <div class="menu_container">


            <!--start-->
            <ul class="menu_list">

            </ul>


            <!--end -->

            <div class="logo_container">
                <h1 class="logo">Filmeto</h1>
            </div>

<!--            create logout button and link to logout.php-->
            <pre>                                       </pre>
<!--            <p>-->
<!--                --><?php
//                session_start();
//                echo "Welcome ". $_SESSION['$username']. "<br>";
//                ?>
<!--            </p>-->
            <pre>                                                    </pre>
            <a href="../backend/logout.php" style="color: white" class="logout">Logout</a>

    </nav>







    <!-- left side bar -->



    <aside class="left_side">
        <!--sider bar-->

        <a href="../home/index.php"> <i class="left_menu_icon fas fa-home"></i></a>
        <a href="../About%20US/index.php"> <i class="fa fa-info-circle"></i></a>
        <a href="../Profile/profile.php"><i class="left_menu_icon fas fa-users"></i></a>
        <a href="../delete/index.php"><i class="fa-solid fa-user-minus"></i></a>
        <a href="../update/index.php"><i class="fa-solid fa-pen"></i></a>


    </aside>



    <section>

        <div class="content_container">
            <div class="featured_content"
                style="background:linear-gradient(to bottom, rgba(0,0,0,0), #151515), url(cover9.jpg)">

            </div>


            <!--first list_featured_one-->
            <div class="movie_list_container">
                <h1 class="movie_list_title">TRENDING ON Filmeto</h1>
                <div class="movie_list_wrapper">
                    <div class="movie_list">
                        <div class="movie_list_item">

                            <img src="strange.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Doctor Strange in the Multiverse of Madness</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">8 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="black phone.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">The Black Phone</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">8 &#36;</p>
                        </div>

                        <div class="movie_list_item">

                            <img src="stranger.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Stranger Things 4</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">10 &#36;</p>
                        </div>

                        <div class="movie_list_item">

                            <img src="house of dragon.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">House of the Dragon
                            </span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">10&#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="thor.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Thor: Love and Thunder
                            </span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">7&#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="spider man.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Spider-Man</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">5 &#36;</p>
                        </div>




                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>

            <!--first list_featured_one-->

            <div class="movie_list_container">
                <h1 class="movie_list_title">Action Movies</h1>
                <div class="movie_list_wrapper">
                    <div class="movie_list">
                        <div class="movie_list_item">

                            <img src="tenet.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">TENET</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">5 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="matrix.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">The Matrix</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">3 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="leon.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Léon: The Professional</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">4 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="dark night.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">The Dark Knight</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">5 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="inception.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Inception</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">6 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="lord.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">The Lord of the Rings: The Fellowship of the Ring</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">4 &#36;</p>
                        </div>


                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <!--featured_two-->

            <!--first list featured two-->
            <div class="movie_list_container">
                <h1 class="movie_list_title">Drama Movies</h1>
                <div class="movie_list_wrapper">
                    <div class="movie_list">
                        <div class="movie_list_item">

                            <img src="Parasite.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Parasite</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">3 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="manchster.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Manchester by the Sea</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">5 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="forrest.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Forrest Gump</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">4 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="eternal.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Eternal Sunshine of the Spotless Mind</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">3 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="her.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Her</span>



                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">4 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="nocturnal.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Nocturnal Animals
                            </span>



                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">5 &#36;</p>
                        </div>


                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <!--second list featured two-->
            <div class="movie_list_container">
                <h1 class="movie_list_title">Netflix Series</h1>
                <div class="movie_list_wrapper">
                    <div class="movie_list">
                        <div class="movie_list_item">

                            <img src="la.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">La casa de papel
                            </span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">5 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="dark.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Dark</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">6 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="peaky.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Peaky Blinders</span>

                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">7 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="reasons.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">13 Reasons Why</span>

                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">4 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="mr robot.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Mr. Robot</span>

                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">6 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="queen.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">The Queen's Gambit</span>

                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">5 &#36;</p>
                        </div>


                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="movie_list_container">
                    <h1 class="movie_list_title">HBO Series</h1>
                    <div class="movie_list_wrapper">
                        <div class="movie_list">
                            <div class="movie_list_item">

                                <img src="got.jpg" alt="picture" class="movie_list_item_img">
                                <span class="movie_list_item_title">Game Of Thrones
                                </span>
                                <button class=" ">
                                    <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                                </button>
                                <p class="movie_list_item_price">7 &#36;</p>
                            </div>
                            <div class="movie_list_item">

                                <img src="west.jpg" alt="picture" class="movie_list_item_img">
                                <span class="movie_list_item_title">WestWorld</span>
                                <button class=" ">
                                    <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                                </button>
                                <p class="movie_list_item_price">6 &#36;</p>
                            </div>
                            <div class="movie_list_item">

                                <img src="che.jpg" alt="picture" class="movie_list_item_img">
                                <span class="movie_list_item_title">Chernobyl
                                </span>

                                <button class=" ">
                                    <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                                </button>
                                <p class="movie_list_item_price">5 &#36;</p>
                            </div>
                            <div class="movie_list_item">

                                <img src="night of.jpg" alt="picture" class="movie_list_item_img">
                                <span class="movie_list_item_title">The Night Of
                                </span>

                                <button class=" ">
                                    <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                                </button>
                                <p class="movie_list_item_price">4 &#36;</p>
                            </div>
                            <div class="movie_list_item">

                                <img src="i know.jpg" alt="picture" class="movie_list_item_img">
                                <span class="movie_list_item_title">I Know This Much Is True
                                </span>

                                <button class=" ">
                                    <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                                </button>
                                <p class="movie_list_item_price">4 &#36;</p>
                            </div>
                            <div class="movie_list_item">

                                <img src="euphoria.jpg" alt="picture" class="movie_list_item_img">
                                <span class="movie_list_item_title">Euphoria
                                </span>

                                <button class=" ">
                                    <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                                </button>
                                <p class="movie_list_item_price">6 &#36;</p>
                            </div>


                        </div>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="movie_list_container">
                <h1 class="movie_list_title"> Top Rated</h1>
                <div class="movie_list_wrapper">
                    <div class="movie_list">
                        <div class="movie_list_item">

                            <img src="shawshank.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">The Shawshank Redemption
                            </span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">5 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="godfather.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">The Godfather
                            </span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">6 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="breaking bad.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Breaking Bad
                            </span>

                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">7 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="pulp.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Pulp Fiction
                            </span>

                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">4 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="band.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Band of Brothers
                            </span>

                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">5 &#36;</p>
                        </div>
                        <div class="movie_list_item">

                            <img src="seven.jpg" alt="picture" class="movie_list_item_img">
                            <span class="movie_list_item_title">Se7en</span>
                            <button class=" ">
                                <a class="movie_list_item_button " href="../Checkoutform/index.php">Buy</a>
                            </button>
                            <p class="movie_list_item_price">4 &#36;</p>
                        </div>


                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </div>


        </div>
    </section>

    <script type="text/javascript" src="home.js"></script>
</body>

</html>