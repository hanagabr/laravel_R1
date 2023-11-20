<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>News form</h2>
  <form action="{{route('news')}}" method="post">
  @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
      <label for="content">content:</label>
      <textarea class="form-control" rows="5" id="content" name ="content"></textarea>
    </div>
    <div class="form-group">
      <label for="author">author:</label>
      <input type="text" class="form-control" id="author" placeholder="Enter author" name="author">
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="published"> published</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>