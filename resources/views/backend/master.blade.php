<!DOCTYPE html>
<html>
<head>
    <base href="{{asset('backend')}}/">
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/JQuery/jquery.min.js"></script>
  

  <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="">Manager</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
          <li>
            <a class="nav-link active" href="">Trang chủ <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item ">
          <a class="nav-link" href="">Hòm Thư</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Danh mục bài viết</a>
          </li>
		      <li class="nav-item ">
            <a class="nav-link" href="">Bài viết</a>
          </li>
        </ul>        
      </div>
    </nav>
    <div style="margin-top: 100px;">
        @yield('main');
    </div>
        
</body>
</html>