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
  <h2>update Car</h2>
  <form action="{{route('UpdateCar',$car->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter title" name="title" value ="{{$car->carTitle}}">
    </div>
    <div class="form-group">
      <label for="content">content:</label>
      <textarea class="form-control" rows="5" id="content" name ="descreption" >{{$car->descreption}}</textarea>
    </div>
    <div class="form-group">
      <label for="author">price:</label>
      <input type="text" class="form-control" id="author" placeholder="Enter price" name="price"value ="{{$car->price}}">
    </div>
    <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="image" value="{{$car->image}}">
      <label class="custom-file-label" for="customFile">Choose image</label>
        @error('image')
        {{$message}}
        @enderror
      </div> 

    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($car->published)> published</label>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>
</body>
</html>
