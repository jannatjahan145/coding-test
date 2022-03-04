<div class="container products">
     <h2>Cart</h2>
        @if(Session::has('success'))
            <div class="alert alert-success">
                <strong>Success</strong> {{Session::get('success')}}
            </div>
        @endif
        <div class="row">

            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{asset('images/'.$product->photo) }}" width="500" height="300">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ \Illuminate\Support\Str::limit(strtolower($product->description), 50) }}</p>
                            <p><strong>Price: </strong> ${{ $product->price }}</p>
                            <p class="btn-holder"><a href="{{ route('addToCart',$product->id) }}" class="btn btn-warning btn-block text-center" ole="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->

    </div>

