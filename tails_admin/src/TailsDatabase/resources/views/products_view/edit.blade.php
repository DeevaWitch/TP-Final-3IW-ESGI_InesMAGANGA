@include('layout.app')

@section('content')

<main>
    <form action="{{ url('/products/' . $product->id_product) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label>New product name :</label>
            <input type="text" class="form-control" id="name_product" name="name_product" placeholder="Enter name" value="{{$product->name_product}}">
        </div>
        <div class="form-group">
            <label>New product price :</label>
            <input type="number" min=1 step="1.99" class="form-control" id="price_product" name="price_product" placeholder="Enter price" value="{{$product->price_product}}">
        </div>
        <div class="form-group">
            <label>New product description :</label>
            <textarea class="form-control" id="desc_product" name="desc_product">{{$product->desc_product}}</textarea>
        </div>
        <div class="form-group">
            <label>New product type :</label>
            <select multiple class="form-control" name="id_type" id="id_type">
                @foreach($types as $key => $data)
                <option value="{{$data->id_type}}">{{$data->name_type}}</option>
                @endforeach  
            </select>
        </div>
        <button type="submit" class="btn btn-success">save</button>
    </form>
</main>