@extends('Admin.master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">میزکار {{auth()->user()->username}}</h1>
    </div>


@endsection


