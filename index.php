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

    $sql = "SELECT * FROM `mesto`, `skola` WHERE mesto.id = skola.mesto";
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
              
          echo "</tr>";

          
          
          }
    }

    $conn->close();
?>
    </tbody>
    </table>