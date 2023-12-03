<!DOCTYPE html>
<html lang="en">
<head>
  <title>NEWS List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>News </h2>
  <table class="table table-hover">
  <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Author</th>
        <th>Published</th>
        <th>✍</th>
        <th>💌</th>
        <th>🚮</th>

      </tr>
    </thead>
    <tbody>
        @foreach($news as $new)
      <tr>
        <td>{{$new->title}}</td>
        <td>{{$new->content}}</td>
        <td>{{$new->author}}</td>
        <td>{{$new->published? "yes✔" : "no❌"}}</td>
        <td><a href="editNews/{{$new->id}}">Edit</td>
        <td><a href="NewsDetails/{{$new->id}}">show</td>
        <td><a href="softDelete/{{$new->id}}">delete</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
