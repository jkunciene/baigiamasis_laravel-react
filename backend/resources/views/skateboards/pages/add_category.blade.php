@extends('skateboards/main')
@section('content')
    <div class="col-lg-8">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Add Category </h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="/store_category">
                                @csrf
                                <div class="form-row">

                                    <label for="feInputAddress">Category</label>
                                    <input type="text" name="name" class="form-control" id="feInputAddress" placeholder="iveskite kategorijos pavadinima"> </div>
                                <div class="form-row">

                                <button type="submit" name="submit" class="btn btn-accent">Save category</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@stop