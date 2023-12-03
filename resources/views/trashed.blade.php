<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cars List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Cars </h2>
  <table class="table table-hover">
  <thead>
      <tr>
        <th>Title</th>
        <th>price</th>
        <th>description</th>
        <th>Published</th>
        <th>✍</th>
        <th>💌</th>
        <th>🚮</th>

      </tr>
    </thead>
    <tbody>
        @foreach($car as $car)
      <tr>
        <td>{{$car->carTitle}}</td>
        <td>{{$car->price}}</td>
        <td>{{$car->descreption}}</td>
        <td>{{$car->published? "yes✔" : "no❌"}}</td>
        <td><a href="editCars/{{$car->id}}">Edit</td>
        <td><a href="carDetails/{{$car->id}}">show</td>
       <td><a href="softDelete/{{$car->id}}">delete</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
