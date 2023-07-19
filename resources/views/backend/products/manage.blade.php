@extends('backend.master')

@section('content')
    <section class="p-3">
        <h1 class="text-center mb-3">Manage Category</h1>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td scope="row">{{$loop->iteration}}</td>
                    <td scope="row">{{$product->title}}</td>
                    <td scope="row">{{$product->desc}}</td>
                    <td scope="row">{{$product->price}}</td>
                    <td scope="row">{{$product->image}}</td>
                    <td>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </section>
@endsection