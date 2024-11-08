<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Galerie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>     
        .obrazky {
            padding: 2%;
            margin: 2%; 
            border-radius: 4%; 
            background-color: #1D3461;
        }
        </style>
</head>
<body style="background-color:#141313">
@include('components.navbar')

<section style="margin-left:13%">

<div class="container mt-4 " style="padding-top:4%; padding-bottom:8%; color: White;">
    <div style="padding-left:1%; padding-bottom:1%" class="row">
        <div>  
            <h1>HRY</h1>
        </div>

</div>
    <div class="row">

        <div class="obrazky col-md-2">
            <a href="https://example.com/image1" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 1">
            </a>
            <h2>Název 1</h2>
        </div>
        <div class="obrazky col-md-2">
            <a href="https://example.com/image2" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 2">            
            </a>
            <h2>Název 2</h2>
        </div>
        <div class="obrazky col-md-2">
            <a href="https://example.com/image3" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 3">
            </a>
            <h2>Název 3</h2>
        </div>
        <div class="obrazky col-md-2">
            <a href="https://example.com/image4" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 4">
            </a>
            <h2>Název 4</h2>
        </div>
    </div>

    <div class="row mt-4">
        <div class="obrazky col-md-2">
            <a href="https://example.com/image5" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 5">
            </a>
            <h2>Název 5</h2>
        </div>
        <div class="obrazky col-md-2">
            <a href="https://example.com/image6" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 6">
            </a>
            <h2>Název 6</h2>
        </div>
        <div class="obrazky col-md-2">
            <a href="https://example.com/image7" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 7">
            </a>
            <h2>Název 7</h2>
        </div>
        <div class="obrazky col-md-2">
            <a href="https://example.com/image8" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 8">
            </a>
            <h2>Název 8</h2>
        </div>
    </div>  
</div>

<!-- konec -->

<div class="container mt-4 " style=" padding-bottom:8%; color: White;">
    <div style="padding-left:1%; padding-bottom:1%" class="row">
        <div>  
            <h1>SOFTWARE</h1>
        </div>

</div>
    <div class="row">

        <div class="obrazky col-md-2">
            <a href="https://example.com/image1" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 1">
            </a>
            <h2>Název 1</h2>
        </div>
        <div class="obrazky col-md-2">
            <a href="https://example.com/image2" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 2">            
            </a>
            <h2>Název 2</h2>
        </div>
        <div class="obrazky col-md-2">
            <a href="https://example.com/image3" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 3">
            </a>
            <h2>Název 3</h2>
        </div>
        <div class="obrazky col-md-2">
            <a href="https://example.com/image4" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 4">
            </a>
            <h2>Název 4</h2>
        </div>
    </div>

    <div class="row mt-4">
        <div class="obrazky col-md-2">
            <a href="https://example.com/image5" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 5">
            </a>
            <h2>Název 5</h2>
        </div>
        <div class="obrazky col-md-2">
            <a href="https://example.com/image6" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 6">
            </a>
            <h2>Název 6</h2>
        </div>
        <div class="obrazky col-md-2">
            <a href="https://example.com/image7" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 7">
            </a>
            <h2>Název 7</h2>
        </div>
        <div class="obrazky col-md-2">
            <a href="https://example.com/image8" class="image-card">
                <img src="https://via.placeholder.com/150" alt="Obrázek 8">
            </a>
            <h2>Název 8</h2>
        </div>
    </div>
</div>
</section>
@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
