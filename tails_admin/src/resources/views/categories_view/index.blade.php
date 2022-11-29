@include('layout.app')

@section('content')

<main>
    <a href="{{url('/categories/create')}}" class="button">Add new category</a>
    <!-- card pour chaque element -->
    @foreach($categories as $key => $data)
    <div class="cards">
        <div class="card">
            <h2 class="card-title">Category n° {{$data->id_category}}</h2>
            <p class="card-text">{{$data->name_category}}</p>
            <a href="" class="button">Edit</a>
            <a href="" class="button">Delete</a>
        </div>
    </div>
    @endforeach
</main>