<!DOCTYPE html>
<html lang="en">
<head>
  <title>place List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>places</h2>
  <table class="table table-hover">
  <thead>
      <tr>
        <th>Title</th>
        <th>name</th>
        <th>description</th>
        <th>✍</th>
        <th>💌</th>
        <th>🚮</th>

      </tr>
    </thead>
    <tbody>
        @foreach($place as $place)
      <tr>
        <td>{{$place->title}}</td>
        <td>{{$place->name}}</td>
        <td>{{$place->shortdesc}}</td>
        <td><a href="editPlace/{{$place->id}}">Edit</td>
        <td><a href="placeList/{{$place->id}}">delete</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
