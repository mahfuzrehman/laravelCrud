@extends('backend.master')
@section('content')
    <section>
        <h1 class="text-center m-2 ">Add Products</h1>
        <h3 class="text-center text-success ">{{Session::get('msg')}}</h3>
        <form action="{{route('products.store')}}" method="POST" class="p-5">
            @csrf
            <div class="form-group mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" placeholder="Enter Product Name" name="title">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" placeholder="Enter Product Description" name="desc">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Price</label>
                <input type="number" class="form-control" placeholder="Enter Product Price" name="price">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" placeholder="Upload IMage" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Add Products</button>
        </form>
    </section>
@endsection

