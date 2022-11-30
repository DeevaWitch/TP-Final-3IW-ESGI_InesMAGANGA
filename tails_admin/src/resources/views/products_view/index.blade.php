@include('layout.app')

@section('content')

<main>
    <a class="btn btn-success btn-lg" href="{{url('/products/create')}}" role="button">Add new product</a>

    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">Product n°</th>
                <th scope="col">Product name</th>
                <th scope="col">Product price</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        @foreach($products as $key => $data)
        <tbody>
            <tr>
                <td>{{$data->id_product}}</td>
                <td>{{$data->name_product}}</td>
                <td>{{$data->price_product}}</td>
                <td>{{$data->desc_product}}</td>
                <td>{{$data->name_category}}</td>
                <td>{{$data->name_type}}</td>
                <td>
                    <form action="{{ url('/products/' . $data->id_product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ url('/products/' . $data->id_product .'/edit') }}" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</main>