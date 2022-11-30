@include('layout.app')

@section('content')

<main>
    <form action="{{ url('/types') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>New type name :</label>
            <input type="text" class="form-control" id="name_type" name="name_type" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label>New type category :</label>
            <select multiple class="form-control" name="id_category" id="id_category">
                @foreach($categories as $key => $data)
                <option value="{{$data->id_category}}">{{$data->name_category}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">save</button>
    </form>
</main>