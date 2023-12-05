<!DOCTYPE html>
<html lang="en">
<head>
  <title>update news</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
  <h2>update news</h2>
  <form action="{{route('UpdateNews',$new->id)}}" method="post">
  @csrf
  @method('put')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter title" name="title" value ="{{$new->title}}">
    </div>
    <div class="form-group">
      <label for="content">content:</label>
      <textarea class="form-control" rows="5" id="content" name ="content" >{{$new->title}}</textarea>
    </div>
    <div class="form-group">
      <label for="author">author:</label>
      <input type="text" class="form-control" id="author" placeholder="Enter author" name="author"value ="{{$new->author}}">
    </div>
    <div class="form-group">
        <label for="image">image:</label>
        <input type="image" class="form-control" rows="5" id="image" name="image" value="{{old('image')}}" >
      
      </div> 

    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($new->published)> published</label>
    </div>
    <button type="submit" class="btn btn-default">Update</button>

  </form>
</div>
</body>
</html>
