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


                <div class="drinks_photo w-sm-50  bd-highlight " id="drinks_photo">

                <!-- -->
           
                   <img class="border drink_photo p-1 shadow-lg border-dark rounded" src="./Images/<?echo $drink_num?>.png "height="350px" width=auto  alt="<?echo $name?> photo ">

                </div>


            </div>

            <div class="drinks_procedure w-100 " id="drinks_procedure">
            <div class=" <?php echo $Procedure_class ?>">
                    <?php
                    echo $Procedure;
                    ?>
            </div>

            </div>

        </div>


    </div>
</div>