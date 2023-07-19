@extends('backend.master')
@section('content')
    <section>
        <h1 class="text-center m-2 ">Add Category</h1>
        <h3 class="text-center text-success ">{{Session::get('msg')}}</h3>
        <form action="{{route('category.store')}}" method="POST" class="p-5">
            @csrf
            <div class="form-group mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" class="form-control" placeholder="Enter Category Name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </section>
@endsection

