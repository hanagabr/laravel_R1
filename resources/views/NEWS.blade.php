<!DOCTYPE html>
<html lang="en">
<head>
  <title>News list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>NEWS Table</h2>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>title</th>
        <th>content</th>
        <th>author</th>
        <th>published</th>
        <th>edit</th>

      </tr>
    </thead>
    <tbody>
        @foreach($news as $new)
      <tr>
        <td>{{$new->title}}</td>
        <td>{{$new->content}}</td>
        <td>{{$new->author}}</td>
        <td>{{$new->published? "yes✔" : "no❌"}}</td>
        <td><a href="UpdateNews/{{$new->id}}">Edit</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
