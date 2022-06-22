@extends('admin.master')
@section('title','Create Category')
@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>Add New Category</h1>
    <a class="btn btn-outline-success" onclick="window.history.back()" > Return Back</a></div>
    @include('admin.errors')

    <div class="card shadow mt-4 mb-4">
        <div class="card-header d-flex justify-content-between align-items-center  py-3 ">
            <h6 class="m-0 font-weight-bold text-primary"> Add New Category</h6>
            <a class="btn btn-danger btn-sm" href="{{ route('admin.categories.trash') }}"><i class="fas fa-trash"></i>Trash</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('admin.categories.form')

                    <div class="col-md-12">
                        <button class="btn btn-success px-5">Add</button>
                   </div>
                </div>
            </div>
            </div>
        </form>
        </div>
    </div>

@stop
