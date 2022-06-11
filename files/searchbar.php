  <!-- Search Bar -->
  <div class="searchbar" id="searchbar">
      <div class="row" style="min-height: 50vh;">

          <div class=" container align-self-center mx-auto d-flex  justify-content-center  ">

              <div class="d-flex flex-column bd-highlight mb-3">

                  <div class="logo pt-3 text-center ">
                      <img src="images/logo.png" alt="here lies a logo " height="200px" width="200px">
                  </div>


                  <form action="Search_display.php" class="serach_form" role="search">

                      <div class="d-flex pt-3 mx-3 flex-row ">

                         
                              <div class="px-sm-3 search_box_button">
                                  <input type="search" name="searchbar" class="bordser shadow p-3 border-dark rounded" id="searchbar" placeholder="Quick search" aria-describedby="search">
                              </div>

                              <div class="px-sm-3 search_box_button">
                                  <button type="submit"  class="btn border border-dark shadow  " id="search" height=10px>Search</button>
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