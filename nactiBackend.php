<?php 

    include './hlavicka.php';

?>

<H1>Přihlášení</H1>

        <form action="schvalBackEnd.php" method="post">  
            <div class="form-group">

                <label for="email">Přihlašovací jméno: </label>
                <input type ="text" class="form-control" name ="username">

            </div>
            <div class="form-group">

                <label for="pwd">Heslo:</label>
                <input type="password" class="form-control" name="password">

            </div>
            <div class="form-group form-check">

                <input type ="submit" value="Submit" class="btn btn-primary">


            </div>
        </form>

