@extends('skateboards/main')
@section('content')
    <!-- Default Dark Table -->
    <div class="row">
        <div class="col">
            <div class="card card-small overflow-hidden mb-4">
                <div class="card-header bg-dark">
                    <h6 class="m-0 text-white">Category Management</h6>
                </div>
                <div class="card-body p-0 pb-3 bg-dark text-center">
                    <table class="table table-dark mb-0">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="border-bottom-0">#ID</th>
                            <th scope="col" class="border-bottom-0">Category Name</th>
                            <th scope="col" class="border-bottom-0">Delete</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            @foreach($categories as $category)
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <th><a href="/category_delete/{{$category->id}}" class="btn btn-danger">Delete</a></th>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop