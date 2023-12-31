<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>{{ __('messages.addCar')}}</h2>

  <form action="{{route('input')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="title">{{__('messages.text')}}:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="carTitle" >
      @error('title')
        {{$message}}
        @enderror
    </div>
    <div class="form-group">
      <label for="price">{{__('messages.price')}}:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price" >
      @error('price')
        {{$message}}
        @enderror

    </div>
    <div class="form-group">
        <label for="description">{{__('messages.description')}}:</label>
        <textarea class="form-control" rows="5" id="description" name="descreption"></textarea>
        @error('description')
        {{$message}}
        @enderror
        <div class="form-group">
      <label for="category">{{__('messages.category')}}:</label>
      <select name="category_id" id="category_id">
      <option value="">select category</option>
         @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->categoryName}}</option>
        @endforeach
    </div>

      </div> 
      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="image">
      <label class="custom-file-label" for="customFile">{{__('messages.chooseImage')}}</label>
        @error('image')
        {{$message}}
        @enderror
      </div> 
    <div class="checkbox">
      <label><input type="checkbox" name="published">{{ __('messages.published')}}</label>
    </div>
    <button type="submit" class="btn btn-default">Add</button>
    <div>
       <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">{{__('messages.english')}}</a>
       <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">{{__('messages.arabic')}}</a>
</div>

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
