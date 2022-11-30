@include('layout.app')

@section('content')

<main>
    <a class="btn btn-success btn-lg" href="{{url('/types/create')}}" role="button">Add new types</a>

    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">Type n°</th>
                <th scope="col">Type name</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        @foreach($types as $key => $data)
        <tbody>
            <tr>
                <td>{{$data->id_type}}</td>
                <td>{{$data->name_type}}</td>
                <td>{{$data->name_category}}</td>
                <td>
                    <form action="{{ url('/types/' . $data->id_type) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ url('/types/' . $data->id_type .'/edit') }}" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</main>