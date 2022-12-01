@include('layout.app')

@section('content')

<main>
    <div class="row">
        @foreach($data as $key => $product)
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                {{$product['name_category']}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$product['name_product']}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$product['name_type']}}</h6>
                    <p class="card-text">{{$product['desc_product']}}</p>
                </div>
                <div class="card-footer">
                {{$product['price_product']}} €
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>