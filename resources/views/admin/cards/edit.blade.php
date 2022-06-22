@extends('admin.master')
@section('title','Create card')
@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>Update : {{ $card->title }}</h1>
    <a class="btn btn-outline-success" onclick="window.history.back()" > Return Back</a></div>
    @include('admin.errors')

    <div class="card shadow mt-4 mb-4">
        <div class="card-header d-flex justify-content-between align-items-center  py-3 ">
            <h6 class="m-0 font-weight-bold text-primary"> Update : {{ $card->title }}</h6>
            <a class="btn btn-danger btn-sm" href="{{ route('admin.cards.trash') }}"><i class="fas fa-trash"></i>Trash</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.cards.update', $card->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            @include('admin.cards.form')

            <div class="col-md-12">
                <button class="btn btn-info px-5">Update</button>
           </div>
        </form>
        </div>
    </div>

@stop
