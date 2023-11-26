<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news details</title>
</head>
<body>
    
 <ul class="list-group">
  <li class="list-group-item">News title :{{$new->title}}
</li>
  <li class="list-group-item"> News content :{{$new->content}}
</li>
  <li class="list-group-item">News author :{{$new->author}}
</li>
</ul>

</body>
</html>