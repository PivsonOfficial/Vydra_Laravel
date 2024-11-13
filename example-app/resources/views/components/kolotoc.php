<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Component</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
   
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-inner position-relative">

  <p id="carousel-caption" class="h5 position-absolute w-100 text-center" style="bottom: 50%; color: white; z-index: 10;">
    Slide 1
  </p>

  <div class="carousel-item active">
    <img src="https://images8.alphacoders.com/532/532305.jpg" class="d-block w-100" alt="Slide 1">
  </div>
  <div class="carousel-item">
    <img src="https://images5.alphacoders.com/532/532350.jpg" class="d-block w-100" alt="Slide 2">
  </div>
  <div class="carousel-item">
    <img src="https://mmo-reference.com/img/1920x1200/_jeux//cube-world/wallpaper/04.jpg" class="d-block w-100" alt="Slide 3">
  </div>
</div>

<div class="carousel-indicators">
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" onclick="setCaption('Slide 1')"></button>
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" onclick="setCaption('Slide 2')"></button>
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" onclick="setCaption('Slide 3')"></button>
</div>

<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

<script>
  function setCaption(caption) {
    document.getElementById('carousel-caption').textContent = caption;
  }

  document.getElementById('myCarousel').addEventListener('slide.bs.carousel', function (event) {
    const captions = ['Slide 1', 'Slide 2', 'Slide 3'];
    setCaption(captions[event.to]);
  });
</script>
</html>