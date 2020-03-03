@extends('skateboards/main')
@section('content')
    <div class="col-lg-8">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Product table</h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="/store_product" enctype="multipart/form-data" class="p-5 bg-white">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="kategorijos">Category</label>
                                        <select name="kategorijos" class="custom-select">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach;
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="feInputAddress">Product Name</label>
                                    <input type="text" name="name" class="form-control" id="feInputAddress" placeholder="Product Name"> </div>

                                <div class="form-group">
                                <label for="feInputAddress">Product description</label>
                                <input type="text" name="description" class="form-control" id="feInputAddress" placeholder="Product description"> </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="img">IMG</label>
                                        <input type="file" name="img" id="img" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="feInputAddress">Product Price</label>
                                    <input type="text" name="description" class="form-control" id="feInputAddress" placeholder="Product Price"></div>
                                <div class="form-group">
                                    <label for="feInputAddress">Product quantity</label>
                                    <input type="text" name="description" class="form-control" id="feInputAddress" placeholder="Product quantity"></div>

                                <button type="submit" value="Add ad" class="btn btn-accent">Add New Product</button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@stop