@extends('main')


@section('content')

<div class="col-md-4 mt-3 p-2 m-auto border-info shadow">
    <h2 class="text-center text-primary">Update View</h2>
    <form action="updatedata" method="GET">
        <div class="mb-2">
            <label for="">Product Name</label>
            <input type="text" name="p_name" value="{{ $p_name }}" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Product Price</label>
            <input type="text" name="p_price" value="{{ $p_price }}" class="form-control">
        </div>
        <br>
        <input type="hidden" name="id" value="{{ $id }}">
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
</div>

@endsection
