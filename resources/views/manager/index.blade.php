@extends('admin.master')
@section('title','All cards')
@section('content')

<div class="d-flex justify-content-between align-items-center">
    {{-- <h1>{{ ($type =='trash') ?'Trashed cards':'All cards' }}</h1> --}}
    <a class="btn btn-outline-success" href="{{ route('admin.cards.create') }}"> Add New card</a></div>
    @if (session('msg'))
<div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
    {{ session('msg') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

    <div class="card shadow mt-4 mb-4">
        <div class="card-header d-flex justify-content-between align-items-center  py-3 ">
            {{-- <h6 class="m-0 font-weight-bold text-primary">{{ ($type=='trash') ?'Trashed cards':'All cards' }}</h6>
            @if ($type=='trash')
            <a class="btn btn-danger btn-sm" href="{{ route('admin.cards.index') }}"><i class="fas fa-tags"></i>All</a>
            @else
            <a class="btn btn-danger btn-sm" href="{{ route('admin.cards.trash') }}"><i class="fas fa-trash"></i>Trash</a>
            @endif --}}

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Card</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>User</th>
                            <th>Card</th>

                            <th>Actions</th>

                        </tr>
                    </tfoot>
                    <tbody>
{{-- @foreach ($listcards as $item )
    {{ $item->user_id }}
@endforeach --}}



                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop
