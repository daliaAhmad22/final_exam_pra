@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="content-wrapper">
        <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Products</h3>
            </div>
        </div>

        <table class="table table-bordered">

            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>quantity</th>
                <th>details</th>

            </tr>
            @foreach($products as $product)
            <tr>
                <td>>{{$products->name}}</td>
                <td>{{$products->price}}</td>
                <td>{{$products->quantity}}</td>
                <td>{{$products->details}}</td>

                <td>
                    <a class="btn btn-info" href="">Edit</a>
                    <a class="btn btn-danger" href="delete/{{$product->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="5"><a اhref="admin/products/create">إضافة منتج جديد</a></td>
            </tr>
        </table>
    </div>
</body>
</html>
@endsection
