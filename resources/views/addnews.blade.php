<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADD News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>{{ __('messages.contactForm')}}</h2>

  <form action="{{route('news')}}" method="post">
  @csrf
    <div class="form-group">
      <label for="title">{{ __('messages.title')}}:</label>
      <input type="text" class="form-control" id="email" placeholder="{{__('messages.enter title')}}" name="title">
    </div>
    <div class="form-group">
      <label for="content">{{ __('messages.content')}}:</label>
      <textarea class="form-control" rows="5" id="content" name ="content"></textarea>
    </div>
    <div class="form-group">
      <label for="author">{{ __('messages.author')}}:</label>
      <input type="text" class="form-control" id="author" placeholder="{{__('messages.enter author')}}" name="author">
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="published"> {{ __('messages.published')}}</label>
    </div>
    <button type="submit" class="btn btn-default">{{ __('messages.submit')}}
</button>

<div>
       <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">{{__('messages.english')}}</a>
       <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">{{__('messages.arabic')}}</a>
</div>
  </form>
</div>
</body>
</html>
