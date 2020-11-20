
<?php

include './hlavicka.php';

?>
<h1>Mapa</h1>

<div>
    <div id ="map"></div>
    <style>#map { height: 700px; }</style>
    <script>
        var map = L.map('map').setView([49.067068, 17.460288], 13);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);  
        
        <?php
            include './DB.php';
            
            $sql = "SELECT * FROM `mesto`, `skola` WHERE mesto.id = skola.mesto";
            $result = $conn->query($sql);
            
            $pocetPrijatach = 45;
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc())
                    {
                    
                    
        
        ?>
        
        var marker = L.marker([<?php echo $row["geo_lat"]; ?>,<?php echo $row["geo_long"]; ?>]).addTo(map);
        marker.bindPopup("<b><?php echo str_replace(array("\n", "\r"), '', $row["nazevSkoly"]); ?> </b> <br>Počet přijatých žáků: <?php echo $pocetPrijatach; ?> ").closePopup();
    
        <?php
                    }
            }
                    
                    $conn->close();
        ?>
    </script>
</div>                                                                                                                            