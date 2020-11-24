<?php
    
    $jmeno = filter_input(INPUT_POST, 'jmeno');
    $heslo = filter_input(INPUT_POST, 'heslo');
    
    
    if($jmeno=="admin" AND $heslo=="admin")
    {
        include './backend.php';
    }
     else
    {
        include './nactiBackend.php';
        
        echo '<div class="alert alert-danger">';
        echo '<strong>Chyba!</strong> Zadali jste špatné přihlačovací údaje.';
        echo '</div>';
    }