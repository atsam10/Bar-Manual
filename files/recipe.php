<? include('db.php') ?>
<div class="drinks_page  container" id="drinks_page">
    <div class="container ">

        <div class="d-flex flex-column bd-highlight mb-3">

            <h1 class="drinks_name m-5">
                <?php
                echo $name;
                ?>
            </h1>



            <div class="d-flex flex-sm-row  flex-column-reverse bd-highlight  mb-3 ">
                <div class="drinks_ingredients  w-sm-50 d-felx  flex-column bd-highlight ">

                    <h1 class="drinks_ingredients pt-5" id="heading">

                        <b>
                            <?php
                            echo $title;
                            ?>
                        </b>
                    </h1>
                    
                    <div class="drinks_ingredients p-4 " id="ingredients">
                        <?php
                        echo $Ingredients;
                        ?>
                    </div>

                </div>


               <div class="drinks_photo p-3  w-sm-50 bd-highlight " id="drinks_photo">


                    < photo>

                </div> 


            </div>

            <div class="drinks_procedure border p-5 w-100 border-dark rounded" id="drinks_procedure">

                <?php
                echo $Procedure;
                ?>
            </div>

        </div>


    </div>
</div>