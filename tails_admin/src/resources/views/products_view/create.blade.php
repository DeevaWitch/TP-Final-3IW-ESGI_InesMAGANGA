@include('layout.app')

@section('content')

<main>
    <form action="{{ url('/products') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>New product name :</label>
            <input type="text" class="form-control" id="name_product" name="name_product" placeholder="Enter name">
        </div>
        
    </form>
</main>