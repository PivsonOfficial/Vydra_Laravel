<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Chánova</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=GoogleAPI"></script>
    <style>
        #map {
            height: 500px; 
            width: 100%;   
        }
    </style>
</head>
<body>
<h2>Sídlo</h2>
    <div id="map"></div>

    <script>
        function initMap() {
            const chanovPosition = { lat: 50.507251, lng: 13.653997 };

            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15, 
                center: chanovPosition,
            });

            new google.maps.Marker({
                position: chanovPosition,
                map: map,
                title: "Chánov, Most",
            });
        }

        window.onload = initMap;
    </script>

</body>
</html>
