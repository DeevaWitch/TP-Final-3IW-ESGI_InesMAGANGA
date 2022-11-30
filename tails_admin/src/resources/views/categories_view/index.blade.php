@include('layout.app')

@section('content')

<main>
    <a class="btn btn-success btn-lg" href="{{url('/categories/create')}}" role="button">Add new category</a>
   
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">Category n°</th>
                <th scope="col">Category name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        @foreach($categories as $key => $data)
        <tbody>
            <tr>
                <td>{{$data->id_category}}</td>
                <td>{{$data->name_category}}</td>
                <td>
                    <form action="{{ url('/categories/' . $data->id_category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <!-- <a href="{{ url('/categories/' . $data->id_category) }}" class="btn btn-info">See</a> -->
                        <a href="{{ url('/categories/' . $data->id_category .'/edit') }}" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</main>