  <!-- Search Bar -->
  <div class="searchbar" id="searchbar">
      <div class="row" style="min-height: 50vh;">

          <div class=" container align-self-center mx-auto d-flex  justify-content-center  ">

              <div class="d-flex flex-column bd-highlight mb-3">

                  <div class="logo p-3 text-center ">
                      <img class="p-2 border border-dark rounded" src="Images/logo.jpeg" alt="here lies a logo " height="200px" width="200px">
                  </div>


                  <form action="Drinks_display.php" class="serach_form" role="search" method="POST">

                      <div class="d-flex pt-1 mx-3 flex-row ">


                          <div class="px-sm-3 search_box_button">


                              <input list="drinks" name="searchbar" class="px-4 border border-dark rounded bg-transparent " id="searchbar_input" placeholder="Quick search" aria-describedby="search" required autocomplete="off">

                              <datalist class="drinks_list" id="drinks">

                                  <option value="Tropical Thunder">
                                  <option value="Coriander and Coconut Virgin Mojito">
                                  <option value="Cool as Cucumber">
                                  <option value="Bollywood Smash">
                                  <option value="Queens Necklace">
                                  <option value="Bombay-Champeach Bellini">
                                  <option value="Lychee Bellini">
                                  <option value="Aperol Spiritz">
                                  <option value="Snow's Negroni">
                                  <option value="Pimmonade">
                                  <option value="Vodka Bitters">
                                  <option value="Tamarind Margarita">
                                  <option value="Goan Martini">
                                  <option value="Mango Mojito">
                                  <option value="Pomegranate Martini">
                                  <option value="Spicy Baby">
                                  <option value="Classic Margarita">
                                  <option value="Classic Martini">
                                  <option value="Classic mojito">
                                  <option value="Long Island Iced Tea">
                                  <option value="Cosmopolitan">
                                  <option value="Espresso Martini">
                                  <option value="Old Fashioned">
                                  <option value="Dark and Stormy">
                                  <option value="Cuba libre">
                                  <option value="Amaretto Sours">

                              </datalist>


                              <!-- <input type="search" name="searchbar" class="bordser shadow p-3 border-dark rounded" id="searchbar" placeholder="Quick search" aria-describedby="search">  -->

                              <button type="submit" class="btn border border-dark p-2  " id="search" height=10px>


                                  <span class="search_txt"> Search </span>
                                  <span class="search_logo"> <i class="fa-solid fa-magnifying-glass"></i> </span>


                              </button>
                          </div>

              


                      </div>
                      <span id="ErrorPlacement"></span>
                  </form>
                  <div class="pt-4 label mx-sm-3">
                      <b class="">Always check for ID for customers who looks under 25</b>
                  </div>
              </div>



          </div>

      </div>
  </div>