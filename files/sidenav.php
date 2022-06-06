<?php require('db.php');
$drink = new bar ;
?>

<!-- sidenav -->
    <div class="sidenav" id="sidenav">

        <button type="button" class=" closebtn  btn  btn-lg " onclick="closeNav()">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <ul class=" pt-5" style="list-style: none;">

            <li class="drinks_types pt-3">
                <a class="btn " data-bs-toggle="collapse" href="#collapseMocktails" role="button" aria-expanded="false" aria-controls="collapseMocktails">
                    Mocktails
                </a>
            </li>
            <div class="collapse" id="collapseMocktails">
                <div class="pt-3">

                    <ul class="Mocktails" style="list-style: none;">
                        <li class="pt-3"> <b> <button class="btn mocktails " onclick=" show_drinks()" > <div id="tt">aldo</div>  Tropical Thunder </button> </b></li>
                        <li class="pt-3"> <b> <button class="btn mocktails "> Coriander and Coconut virgin mojito </button> </b></li>
                        <li class="pt-3"> <b> <button class="btn mocktails "> Cool-as-Cucumber </button> </b></li>
                        <li class="pt-3"> <b> <button class="btn mocktails "> Bollywood Smash </button> </b></li>
                    </ul>

                </div>
            </div>



            <li class="drinks_types pt-5">
                <a class="btn " data-bs-toggle="collapse" href="#collapsecocktails" role="button" aria-expanded="false" aria-controls="collapsecocktails">
                    Cocktails
                </a>
            </li>

            <div class="collapse" id="collapsecocktails">
                <div class="pt-3">
                    <ul class="cocktails" style="list-style: none;">
                        <li class="pt-3">
                            <b>
                                <a class="btn " data-bs-toggle="collapse" href="#collapse_sparkilng_Tipples" role="button" aria-expanded="false" aria-controls="collapse_sparkilng_Tipples">
                                    <span class="Cocktails_name"> Sparklilng Tipples </span>
                                </a>
                            </b>
                        </li>
                        <div class="collapse" id="collapse_sparkilng_Tipples">
                            <div class="pt-3">

                                <ul class="Mocktails" style="list-style: none;">
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Queens Necklace </b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Bombay-Champeach Bellini </b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Lychee Bellini </b></button> </li>

                                </ul>

                            </div>
                        </div>

                        <li class="pt-3">
                            <b>
                                <a class="btn " data-bs-toggle="collapse" href="#collapse_Aperitivo" role="button" aria-expanded="false" aria-controls="collapse_ Aperitivo">
                                    <span class="Cocktails_name"> Aperitivo </span>
                                </a>
                            </b>
                        </li>
                        <div class="collapse" id="collapse_Aperitivo">
                            <div class="pt-3">

                                <ul class="Mocktails" style="list-style: none;">
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Aperol Spiritz </b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Snow's Negroni </b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Pimmonade</b></button> </li>

                                </ul>

                            </div>
                        </div>
                        <li class="pt-3">
                            <b>
                                <a class="btn " data-bs-toggle="collapse" href="#collapse_Signature" role="button" aria-expanded="false" aria-controls="collapse_Signature">
                                    <span class="Cocktails_name"> Signature Cocktails</span>
                                </a>
                            </b>
                        </li>
                        <div class="collapse" id="collapse_Signature">
                            <div class="pt-3">

                                <ul class="cocktails" style="list-style: none;">
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Vodka Bitters</b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Tamarind Margarita </b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Goan Martini </b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Mango Mojito </b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Pomegranate Martini</b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Spicy Baby</b></button> </li>


                                </ul>

                            </div>
                        </div>
                        <li class="pt-3">
                            <b>
                                <a class="btn " data-bs-toggle="collapse" href="#collapse_classic" role="button" aria-expanded="false" aria-controls="collapse_classic">
                                    <span class="Cocktails_name"> Classic Cocktails</span>
                                </a>
                            </b>
                        </li>
                        <div class="collapse" id="collapse_classic">
                            <div class="pt-3">

                                <ul class="cocktails" style="list-style: none;">
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Classic Margarita </b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Classic Martini </b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Classic mojito</b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Long Island Iced Tea</b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Cosmopolitan</b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Espresso Martini</b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Old Fashioned</b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Dark and Stormy</b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Cuba libre</b></button> </li>
                                    <li class="pt-3"><button class="btn cocktail_list "> <b> Amaretto Sours </b></button> </li>


                                </ul>

                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </ul>




    </div>
