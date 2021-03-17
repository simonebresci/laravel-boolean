<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DB MySql Cars</title>
  </head>
  <body>
    @foreach($cars as $key => $car)
      <h2>Auto n.{{$key + 1}}</h2>
      <span>ID: {{$car->id}}</span> <br>
      <span>Modello: {{$car->modello}}</span> <br>
      <span>Marca: {{$car->marca}}</span> <br>
      <span>Cilindrata: {{$car->cilindrata}}</span> <br>
    @endforeach

  </body>
</html>
