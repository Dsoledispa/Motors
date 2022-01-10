<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>
    @forelse ($car as $cars)
    <h1>Car {{ $cars->id }}</h1>
    <ul>
      <li>Make: {{ $cars->make }}</li>
      <li>Model: {{ $cars->model }}</li>
      <li>Produced on: {{ $cars->produced_on }}</li>
    </ul>  
    @empty
        <h1>Esta vacio!</h1>
    @endforelse
  </body>
</html>