<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Liste des produits</h1>

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <a href="/logout">Logout</a>

    @foreach($products as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->price}}</td>
            <td>{{$p->quantity}}</td>
            <td>{{$p->description}}</td>
            <td>
                <a href="/edit/{{$p->id}}">Edit</a>
                <a href="/delete/{{$p->id}}">Delete</a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
</body>
</html>