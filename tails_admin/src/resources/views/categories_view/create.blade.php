@include('layout.app')

@section('content')

<main>
    <form action="{{ url('/categories') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>New category name :</label>
            <input type="text" class="form-control" id="name_category" name="name_category" placeholder="Enter name">
        </div>
        <button type="submit" class="btn btn-success">save</button>
    </form>
</main>