<!doctype html>
<html lang="en">
<head>
    <title>Products list</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('table-06/css/style.css')}}">

</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-4">
                <h2 class="heading-section">Table #06</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="h5 mb-4 text-center">Table Accordion</h3>
                <div class="table-wrap">
                    <a href="{{route('product.create')}}">Create new Product</a>
                    <table class="table">
                        <thead class="thead-primary">
                        <tr>
                            <th>Photo</th>
                            <th>Product's Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr class="alert" role="alert">
                                <td>
                                    <div class="img">
                                        <img src="{{$product->photo}}" style="height: 50px">
                                    </div>
                                </td>
                                <td>
                                    <div class="name">
                                        <p>{{$product->name}}</p>
                                    </div>
                                </td>
                                <td>{{$category[$product->category_id]->name}}</td>
                                <td>
                                    {{$product->price}}VND
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('table-06/js/jquery.min.js')}}"></script>
<script src="{{asset('table-06/js/popper.js')}}"></script>
<script src="{{asset('table-06/js/bootstrap.min.js')}}"></script>
<script src="{{asset('table-06/js/main.js')}}"></script>

</body>
</html>

