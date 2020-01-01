<!DOCTYPE html>
<html>
<head>
    <base href="{{asset('backend')}}/">
	<title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .wrap-loading {
        z-index: 99999;
        position: fixed;
        width: 100%;
        height: 100%;
        background: #222;
        opacity: 0.5;
        top: 0;
    }

    .lds-ring {
        top: 45%;
        left: 45%;
        display: inline-block;
        position: absolute;
        width: 64px;
        height: 64px;
    }

    .lds-ring div {
        box-sizing: border-box;
        display: block;
        position: absolute;
        width: 80px;
        height: 80px;
        margin: 6px;
        border: 6px solid #fff;
        border-radius: 50%;
        animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        border-color: #fff transparent transparent transparent;
    }

    .lds-ring div:nth-child(1) {
        animation-delay: -0.45s;
    }

    .lds-ring div:nth-child(2) {
        animation-delay: -0.3s;
    }

    .lds-ring div:nth-child(3) {
        animation-delay: -0.15s;
    }

    @keyframes lds-ring {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    body{
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
    }
</style>
<div class="wrap-loading">
    <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <strong style="color: white; position: absolute; top: 20px; left: 20px;">Green Center Villass</strong>
    </div>
</div>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/JQuery/jquery.min.js"></script>
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
 <a class="navbar-brand" href="{{url('/')}}">Manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li>  
        <a class="nav-link active" href="{{url('/admin/home')}}">Trang chủ <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item ">
      <a class="nav-link" href="{{url('/admin/inbox')}}">Hòm thư</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('/admin/category')}}">Danh mục bài viết</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('/admin/news')}}">Bài viết</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('/admin/contact')}}">Liên hệ</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('/admin/setting')}}">Settings</a>
      </li>
    </ul>  
  <strong style="color: #fff; padding-right: 30px;">Xin chào, {{Auth::user()->name}}</strong>
  <a href="/admin/logout" class="btn btn-primary">Đăng xuất</a>
  </div>


</nav>
<div style="margin-top: 100px;">
  <div class="container">
    @include('errors.error')
    @if(count($errors) > 0)
      <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      </div>
    @endif
  </div>
    @yield('main');
</div>
        
</body>
<script>
      $(document).ready(function () {
          $('.wrap-loading').css({ 'visibility': 'hidden' });
      });
</script>
</html>