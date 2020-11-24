<?php

include './hlavicka.php';
    
?>

<H1>BACKEND</H1>

    <H2>Vlož školu</H2>
    
        <form action="vlozSKolu.php" method="post">  
            <div class="form-group">

                <label for="email">Název školy: </label>
                <input type ="text" class="form-control" name ="nazevSkoly">

            </div>
            <div class="form-group">

                <label for="pwd">Město (ID):</label>
                <input type="number" class="form-control" name="mesto">

            </div>
            <div class="form-group">

                <label for="email">geo_lat: </label>
                <input type ="text" class="form-control" name ="geo_lat">

            </div>
            <div class="form-group">

                <label for="email">geo_long: </label>
                <input type ="text" class="form-control" name ="geo_long">

            </div>
            <div class="form-group form-check">

                <input type ="submit" value="Submit" class="btn btn-primary">


            </div>
        </form>

