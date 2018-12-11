  <!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mastech Digital</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('img/mastech-new-logo.png') }}">
 {{--  <link rel="shortcut icon" type="image/png" href="{{ asset('vendor/laravel-filemanager/img/folder.png') }}"> --}}
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
     <img src="{{asset('img/mastech-new-logo.png')}}">
    <div class="row">
      <div class="col-md-12">
        <!-- <h2>Embed file manager</h2> -->
        <!-- <iframe src="/knowledgemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe> -->

<p>
<b>First Post Body:-&nbsp&nbsp&nbsp</b>
{{$posts['posts']['data']['0']['postBody']}}
</p>
        

<pre>{{print_r($posts)}}</pre>

      </div>
    </div>
  </div>

 
</body>
</html>
