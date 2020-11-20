<?php

    include './hlavicka.php';

?>

    <H1> Výpis škol</H1>
    
    <table class="table table-striped">
        <!--Názvy řádků-->
    <thead>
      <tr>
        <th>Názek školy</th>
        <th>Město</th>
        <th>Počet přijatých</th>
      </tr>
    </thead>
    
    <tbody>
      <tr>
          
<?php
    
    include './DB.php';

    $sql = "SELECT * FROM `mesto`, `skola`, `pocet_prijatych` WHERE mesto.id = skola.mesto AND skola.id = pocet_prijatych.skola";
//    $sql = "select pocet_prijatych.pocet, pocet_prijatych.skola, skola.nazev, skola.id from skola, pocet_prijatych where pocet_prijatych.skola = skola.id";
    $result = $conn->query($sql);
    
    
    if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          
          echo "<tr>";
          
              echo "<td>";
              echo $row["nazevSkoly"];
              echo "</td>";

              echo "<td>";
              echo $row["nazevMesta"];
              echo "</td>";

//              echo "<td>";
//              echo $row["skola"];
//              echo "</td>";

//              echo "<td>";
//              echo $row["skola"];
//              echo "</td>";
              
              echo"<td>";
              echo$row["pocet"];
              echo"</td>";
              
              echo "</tr>";

          
          
          }
    }

    $conn->close();
?>
    </tbody>
    </table>