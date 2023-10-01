@extends('main') @section('content')

<div class="container insert-div text-center pb-5 pt-5 ">
    <h2>Insert Data</h2>
    <!-- Button trigger modal -->
    <button
        type="button"
        class="btn btn-outline-primary"
        data-bs-toggle="modal"
        data-bs-target="#staticBackdrop"
    >
        Add Record
    </button>
    <!-- Modal -->
    <div
        class="modal fade"
        id="staticBackdrop"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Product Add or Update Zone
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <form action="insertData" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input
                                type="text"
                                placeholder="Enter Products Name"
                                class="form-control"
                                name="p_name"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                placeholder="Enter Products Price"
                                class="form-control"
                                name="p_price"
                            />
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                placeholder="Enter Products Category"
                                class="form-control"
                                name="p_category"
                            />
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control"
                            name="p_image" />
                        </div>
                        <button type="submit" class="btn btn-outline-primary">
                            Add Record
                        </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Close
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container">
    <table class="table mt-5">
        <thead class="bg-primary text-white fw-bold">
            <th>id</th>
            <th>Prduct Name</th>
            <th>Product Price</th>
            <th>Product Category</th>
            <th>Product Image</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <tbody class="text-primary bg-light">
            @foreach ($data as $item)
            <tr>
            <form action="updatedelete" method="GET">
                <td class="pt-5"><input type="hidden" name="id" value="{{ $item['id'] }}"> {{ $item['id'] }}</td>
                <td class="pt-5"> <input type="hidden" name="p_name" value="{{ $item['p_name'] }}"> {{ $item['p_name'] }}</td>
                <td class="pt-5"><input type="hidden" name="p_price" value="{{ $item['p_price'] }}"> {{ $item['p_price'] }}</td>
                <td class="pt-5"><input type="hidden" name="p_category" value="{{ $item['p_category'] }}"> {{ $item['p_category'] }}</td>
                <td class="pt-5"><input type="hidden" name="p_image" value="{{ $item['p_image'] }}"> <img src="images/{{ $item['p_image'] }}" alt="" width="100px"></td>
                <td class="pt-5"><input type="submit" class="btn btn-outline-primary" name="update" value="Update"></td>
                <td class="pt-5"><input type="submit" class="btn btn-outline-primary" name="delete" value="Delete"></td>
            </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
