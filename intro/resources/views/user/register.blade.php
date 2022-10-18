<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Gestion des Utilisateurs</h1>

<form action=" {{isset($product->id)?"/update":"/register-store"}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{isset($product->id)?$product->id:""}}">
    <div style="margin-bottom: 10px">
        <input type="text" name="last_name" style="height: 30px" placeholder="last name" value="{{isset($product->name)?$product->name:""}}">
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name="first_name" style="height: 30px" placeholder="first name" value="{{isset($product->price)?$product->price:""}}">
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name="username" style="height: 30px" placeholder="username" value="{{isset($product->quantity)?$product->quantity:""}}">
    </div>

    <div style="margin-bottom: 10px">
        <input type="number" name="phone" style="height: 30px" placeholder="phone" value="{{isset($product->quantity)?$product->quantity:""}}">
    </div>

    <div style="margin-bottom: 10px">
        <input type="password" name="password" style="height: 30px" placeholder="password" value="{{isset($product->quantity)?$product->quantity:""}}">
    </div>
    <div>
        <input type="submit" value="{{isset($product->id)?"Modification":"Enregistrer"}}">
    </div>
</form>
</body>
</html>