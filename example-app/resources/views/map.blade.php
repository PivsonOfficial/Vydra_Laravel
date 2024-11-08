<!-- resources/views/map.blade.php -->

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Chánova</title>
    <!-- API klíč vložte na místo YOUR_GOOGLE_MAPS_API_KEY -->
    <script src="https://maps.googleapis.com/maps/api/js?key=ichtyl"></script>
    <style>
        /* Nastavte rozměry pro mapu */
        #map {
            height: 500px; /* Výška mapy */
            width: 100%;   /* Šířka mapy */
        }
    </style>
</head>
<body>
<h2>Sídlo:</h2>
    <div id="map"></div>

    <script>
        function initMap() {
            // Souřadnice pro Chánov, Most, Česko
            const chanovPosition = { lat: 50.507251, lng: 13.653997 };

            // Inicializace mapy
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15, // Nastavení úrovně přiblížení
                center: chanovPosition,
            });

            // Přidání markeru na pozici Chánova
            new google.maps.Marker({
                position: chanovPosition,
                map: map,
                title: "Chánov, Most",
            });
        }

        // Spuštění inicializace mapy po načtení stránky
        window.onload = initMap;
    </script>

</body>
</html>
