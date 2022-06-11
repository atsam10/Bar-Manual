

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
                <form action="./Drinks_display.php" method="POST">

                  
                    <button type="submit" class="btn mocktails pt-3"  name="drink" value="1" > Tropical Thunder</button> 
                    <button type="submit" class="btn mocktails pt-3"  name="drink" value="2" >Coriander and Coconut Virgin Mojito</button> 
                    <button type="submit" class="btn mocktails pt-3"  name="drink" value="3">Cool as Cucumber</button> 
                    <button type="submit" class="btn mocktails pt-3"  name="drink" value="4">Bollywood Smash</button> 
                </form>
                
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
                            <form action="./Drinks_display.php" method="POST">

                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="11" > <b> Queens Necklace </b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="12" > <b> Bombay-Champeach Bellini </b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="13" > <b> Lychee Bellini </b></button> </li>
                            </form>
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
                        <form action="./Drinks_display.php" method="POST">
                            <ul class="Mocktails" style="list-style: none;">
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="14" > <b> Aperol Spiritz </b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="15" > <b> Snow's Negroni </b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="16" > <b> Pimmonade</b></button> </li>

                            </ul>
                        </form>
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
                        <form action="./Drinks_display.php" method="POST">
                            <ul class="cocktails" style="list-style: none;">
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="17" > <b> Vodka Bitters</b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="18" > <b> Tamarind Margarita </b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="19" > <b> Goan Martini </b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="20" > <b> Mango Mojito </b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="21" > <b> Pomegranate Martini</b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="22" > <b> Spicy Baby</b></button> </li>


                            </ul>
                        </form>
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
                        <form action="./Drinks_display.php" method="POST">
                            <ul class="cocktails" style="list-style: none;">
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="23" > <b> Classic Margarita </b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="24" > <b> Classic Martini </b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="25" > <b> Classic mojito</b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="26" > <b> Long Island Iced Tea</b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="27" > <b> Cosmopolitan</b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="28" > <b> Espresso Martini</b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="29" > <b> Old Fashioned</b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="30" > <b> Dark and Stormy</b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="31" > <b> Cuba libre</b></button> </li>
                                <li class="pt-3"><button class="btn cocktail_list " type="submit" name="drink" value="32" > <b> Amaretto Sours </b></button> </li>


                            </ul>
                        </form>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </ul>




</div>