<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    
</head>
<body style="background-color:#141313">
@include('components.navbar')

<section class="container mt-4" style="padding-top:4%; padding-bottom:8%;  color: white">
<h1>Kontakt</h1>
<hr>
<div class="row">
<form  class="col">
  <div class="row" style="margin-bottom:15px;">
    <div class="col">
    <h3>Jméno:</h3>
      <input type="text" class="form-control" placeholder="Jméno" required >
    </div>
    <div class="col">
    <h3>Příjmení:</h3>
      <input type="text" class="form-control" placeholder="Příjmení" required>
    </div>
  </div>
  <div>
  <h3>Email:</h3>
  <div class="col" style="margin-bottom:15px;">
      <input type="text" class="form-control" placeholder="neco@gmail.com" required>
    </div>

  <div class="mb-3">
  <h3>Napište nám:</h3>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Zde napište co máte na srdci" required style="padding-bottom:8%;"></textarea>
    </div>
    <button class="btn btn-lg btn-success" type="submit" style="background-color:#141313">Odeslat</button>

    <hr>
</form>
<div class="col">
@include('map')
</div>

</div>

  
  </section>

@include('components.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
