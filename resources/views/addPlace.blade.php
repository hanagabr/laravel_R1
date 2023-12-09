<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add place</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add place</h2>
  <form action="{{route('addPlace')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" >
      @error('title')
        {{$message}}
        @enderror
    </div>
    <div class="form-group">
      <label for="price">rate:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter rate" name="rate" >
      @error('price')
        {{$message}}
        @enderror

    </div>
    <div class="form-group">
      <label for="from">from:</label>
      <input type="number" class="form-control" id="from" placeholder="enter number" name="from" >
      @error('price')
        {{$message}}
        @enderror
    </div>
    <div class="form-group">
      <label for="to">to:</label>
      <input type="number" class="form-control" id="to" placeholder="Enter number" name="to" >
      @error('price')
        {{$message}}
        @enderror
    </div>
        <div class="form-group">
        <label for="description">shortdesc:</label>
        <textarea class="form-control" rows="5" id="description" name="shortdesc"></textarea>
        @error('description')
        {{$message}}
        @enderror
      </div> 
      <div class="form-group">
      <label for="to">name:</label>
      <input type="text" class="form-control" id="to" placeholder="Enter name" name="name" >
      @error('price')
        {{$message}}
        @enderror
    </div>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="image">
      <label class="custom-file-label" for="customFile">Choose image</label>
        @error('image')
        {{$message}}
        @enderror
      </div> 
    <div class="checkbox">
      <label><input type="checkbox" name="active"> active</label>
    </div>
    <button type="submit" class="btn btn-default">Add</button>
  </form>
</div>
<script>
// Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

</body>
</html>
