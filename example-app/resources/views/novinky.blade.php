
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novinky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .gallery-container {
            display: flex;
            align-items: flex-start;
            padding-top: 2%;
        }

        .main-image {
            width: 100%;
            height: 540px;
            object-fit: cover;
            border: 2px solid #ddd;
            margin-right: 2%;
          
        }

        .thumbnail-container {
            display: flex;
            flex-direction: column; 
            gap: 10px; 
        }

        .thumbnail {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border: 2px solid white;
            cursor: pointer;
            transition: transform 0.3s ease, border-color 0.3s ease;
        }
        
        .thumbnail:hover {
            transform: scale(1.1); 
            border-color: #1D3461;
        }

        .InfoImage {
            width: 100%;
            height: 100%;
            border: 2px solid white;
            cursor: pointer;
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .InfoImage:hover {
            border-color: #1D3461;
        }

        h2.InfoH2 {
            padding-top:2%;
            padding-bottom:2%;
        }

        p.InfoP {
            font-size: 130%;
            text-align: justify;
        }
    </style>

</head>
<body style="background-color:#141313">
   
@include('components.navbar')

<section class="container mt-4" style="padding-top:4%; padding-bottom:8%;  color: white">
<h1>Novinky</h1>

<div class="gallery-container">
        <img id="mainImage" class="main-image" src="https://mmo-reference.com/img/1920x1200/_jeux//cube-world/wallpaper/04.jpg" alt="Hlavní obrázek" >

        <div class="thumbnail-container">
            <img id="mainImage" class="thumbnail" src="https://mmo-reference.com/img/1920x1200/_jeux//cube-world/wallpaper/04.jpg" onclick="swapImages(this)">
            <img class="thumbnail" src="https://images8.alphacoders.com/532/532305.jpg" onclick="swapImages(this)">
            <img class="thumbnail" src="https://images5.alphacoders.com/532/532350.jpg" onclick="swapImages(this)">
            <img class="thumbnail" src="https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/4850/capsule_616x353.jpg?t=1685134248" alt="Náhled 4" onclick="swapImages(this)">
            <img class="thumbnail" src="https://gaming-cdn.com/images/products/3574/380x218/shogun-total-war-gold-edition-gold-edition-pc-juego-steam-cover.jpg?v=1730790000" alt="Náhled 5" onclick="swapImages(this)">

        </div>
    </div>
    </section>

    <section class="InfoNovinky container mt-4" style="padding-top:4%; padding-bottom:8%;  color: white">
        <h2 class="InfoH2">Cube World (alpha)  </h2>
    <div class="row"> 
        <div class="col-sm">

        <img class="InfoImage" src="https://mmo-reference.com/img/1920x1200/_jeux//cube-world/wallpaper/04.jpg" alt="Náhled 2">

        </div>

        <div class="col-sm">
            <h3>Co to je?</h3>
            <p class="InfoP">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Quisque tincidunt scelerisque libero. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Vivamus ac leo pretium faucibus. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Donec vitae arcu. Aliquam id dolor. Integer imperdiet lectus quis justo. Etiam commodo dui eget wisi. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Nam sed tellus id magna elementum tincidunt.</p>
        </div>       
</div>
<hr>
<h2 class="InfoH2">Age of Empires III </h2>
    <div class="row"> 
        <div class="col-sm">

        <img class="InfoImage" src="https://images8.alphacoders.com/532/532305.jpg" alt="Náhled 2">

        </div>

        <div class="col-sm">
            <h3>Co to je?</h3>
            <p class="InfoP">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Quisque tincidunt scelerisque libero. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Vivamus ac leo pretium faucibus. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Donec vitae arcu. Aliquam id dolor. Integer imperdiet lectus quis justo. Etiam commodo dui eget wisi. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Nam sed tellus id magna elementum tincidunt.</p>
        </div>       
</div>
<hr>
<h2 class="InfoH2">Need for Speed Carbon  </h2>
    <div class="row"> 
        <div class="col-sm">

        <img class="InfoImage" src="https://images5.alphacoders.com/532/532350.jpg" alt="Náhled 2">

        </div>

        <div class="col-sm">
            <h3>Co to je?</h3>
            <p class="InfoP">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Quisque tincidunt scelerisque libero. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Vivamus ac leo pretium faucibus. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Donec vitae arcu. Aliquam id dolor. Integer imperdiet lectus quis justo. Etiam commodo dui eget wisi. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Nam sed tellus id magna elementum tincidunt.</p>
        </div>       
</div>
<hr>
<h2 class="InfoH2">Cossacks Back to War  </h2>
    <div class="row"> 
        <div class="col-sm">

        <img class="InfoImage" src="https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/4850/capsule_616x353.jpg?t=1685134248" alt="Náhled 2">

        </div>

        <div class="col-sm">
            <h3>Co to je?</h3>
            <p class="InfoP">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Quisque tincidunt scelerisque libero. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Vivamus ac leo pretium faucibus. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Donec vitae arcu. Aliquam id dolor. Integer imperdiet lectus quis justo. Etiam commodo dui eget wisi. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Nam sed tellus id magna elementum tincidunt.</p>
        </div>       
</div>
<hr>
<h2 class="InfoH2">Shogun Total War (Win 2000)  </h2>
    <div class="row"> 
        <div class="col-sm">

        <img class="InfoImage" src="https://gaming-cdn.com/images/products/3574/380x218/shogun-total-war-gold-edition-gold-edition-pc-juego-steam-cover.jpg?v=1730790000" alt="Náhled 2">

        </div>

        <div class="col-sm">
            <h3>Co to je?</h3>
            <p class="InfoP">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Quisque tincidunt scelerisque libero. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Vivamus ac leo pretium faucibus. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Donec vitae arcu. Aliquam id dolor. Integer imperdiet lectus quis justo. Etiam commodo dui eget wisi. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Nam sed tellus id magna elementum tincidunt.</p>
        </div>       
</div>
<hr>
    </section>
    
    @include('components.footer')



    <script>
         function swapImages(thumbnail) {
            const mainImage = document.getElementById('mainImage');
            
            const mainImageSrc = mainImage.src;
            
            mainImage.src = thumbnail.src;
        }
    </script>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>