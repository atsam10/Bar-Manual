

<div class="drinks_page  container" id="drinks_page">
    <div class="container  border boder-dark rounded  ">

        <div class="d-flex flex-column bd-highlight mb-3">

            <h1 class="drinks_name m-5">
                <?php
                echo $name;
                ?>
            </h1>
            <div class="d-flex flex-row bd-highlight  mb-3 ">
                <div class="drinks_ingredients d-felx flex-column p-2 w-50 bd-highlight border border-dark rounded">

                    <h1 class="drinks_ingredients pt-5" id="heading">
                        <b> Ingredients </b>
                    </h1>
                    <div class="drinks_ingredients p-5 " id="ingredients">
                        <?php
                        echo $Ingredients;
                        ?>
                    </div>

                </div>


                <div class="drinks_photo p-3  w-50 bd-highlight border border-dark rounded" id="drinks_photo">


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