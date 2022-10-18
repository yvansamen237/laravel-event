<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>
<body>
<h1>Login des Utilisateurs</h1>

<form action=" {{isset($product->id)?"/update":"/login"}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{isset($product->id)?$product->id:""}}">
    <div style="margin-bottom: 10px">
        <input type="text" name="username" style="height: 30px" placeholder="username"
               value="{{isset($product->quantity)?$product->quantity:""}}">
    </div>

    <div style="margin-bottom: 10px">
        <input type="password" name="password" style="height: 30px" placeholder="password"
               value="{{isset($product->quantity)?$product->quantity:""}}">
    </div>
    <div>
        <input type="submit" value="{{isset($product->id)?"Modification":"login"}}">
    </div>
</form>

<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
</body>
</html>