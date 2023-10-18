@extends('layout.main')

@section('main-section')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover mt-3">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>D.O.B</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($products as $product)
                     <tr>
                        <td>{{$loop->index+1}}</td>
                        <td><img src="products/{{$product->image}}" alt="" class="rounded-cricle" width="50px"
                            height="50px"></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->number}}</td>
                        <td>{{$product->dob}}</td>
                        <td>{{$product->email}}</td>
                        <td>{{$product->email}}</td>
                      </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection