<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car details</title>
</head>
<body>
    <br>
    <br>
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>car title:</th>
        <th>car description:</th>
        <th>car price</th>
        <th>car category</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$car->carTitle}}</td>
        <td>{{$car->descreption}}</td>
        <td>{{$car->price}}</td>
        <td>{{$car->category->categoryName}}</td>
      </tr>

      </tr>
</tbody>
</table>
</body>
</html>
