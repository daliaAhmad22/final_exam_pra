@extends('front.layoutWel')
@section('content2')
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Site meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>تفاصيل المنتج</title>
    <!-- CSS -->
    <link href="{{asset('dist/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="card-body">
        <div class="row">
            @foreach ($products as $product )
                <div class="col-sm">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/' . $product->image)}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="#" title="View Product">{{$product->name}}</a></h4>
                            <p class="card-text"> {{$product->details}}</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">{{$product->price}}</p>
                                </div>
                                <div class="col">
                                    <a href="cart.html" class="btn btn-success btn-block">إضافة الي السلة</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

<!-- JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
    //Plus & Minus for Quantity product
    $(document).ready(function(){
        var quantity = 1;

        $('.quantity-right-plus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            $('#quantity').val(quantity + 1);
        });

        $('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            if(quantity > 1){
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>
</body>
</html>

@endsection

