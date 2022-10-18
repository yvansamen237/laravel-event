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
 <h1>Gestion des produits</h1>

 <form action=" {{isset($product->id)?"/admin/update":"/admin/store"}}" method="post">
     @csrf
     <input type="hidden" name="id" value="{{isset($product->id)?$product->id:""}}">
     <div style="margin-bottom: 10px">
         <input type="text" name="name" style="height: 30px" placeholder="name" value="{{isset($product->name)?$product->name:""}}">
     </div>
     <div style="margin-bottom: 10px">
         <input type="number" name="price" style="height: 30px" placeholder="price" value="{{isset($product->price)?$product->price:""}}">
     </div>
     <div style="margin-bottom: 10px">
         <input type="number" name="quantity" style="height: 30px" placeholder="quantity" value="{{isset($product->quantity)?$product->quantity:""}}">
     </div>
     <div style="margin-bottom: 10px">
         <textarea cols="12" rows="4" name="description">{{isset($product->description)?$product->description:""}}</textarea>
     </div>

     <div>
         <input type="submit" value="{{isset($product->id)?"Modification":"Enregistrer"}}">
     </div>
 </form>

 <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
 <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
 {!! Toastr::message() !!}
</body>
</html>