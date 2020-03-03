@extends('skateboards/main')
@section('content')
    <!-- Default Dark Table -->
    <div class="row">
        <div class="col">
            <div class="card card-small overflow-hidden mb-4">
                <div class="card-header bg-dark">
                    <h6 class="m-0 text-white">Inactive Users</h6>
                </div>
                <div class="card-body p-0 pb-3 bg-dark text-center">
                    <table class="table table-dark mb-0">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="border-bottom-0">#id</th>
                            <th scope="col" class="border-bottom-0">Product Name</th>
                            <th scope="col" class="border-bottom-0">Product Description</th>
                            <th scope="col" class="border-bottom-0">price</th>
                            <th scope="col" class="border-bottom-0">Quantity</th>
                            <th scope="col" class="border-bottom-0">Img</th>
                            <th scope="col" class="border-bottom-0">Update</th>
                            <th scope="col" class="border-bottom-0">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)

                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td><img src="{{asset('storage/'.$product->img)}}" alt="Image" class="img-fluid rounded"></td>
                            <td><a href="/task_update/{{$product->id}}" class="btn btn-danger">Update</a></td>
                            <td><a href="/task_delete/{{$product->id}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop