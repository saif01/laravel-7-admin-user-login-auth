@extends('admin.layouts.common')

@section('title', 'Admin Dashboard')


@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 my-auto">
        <div class="card">
            <div class="card-header">Admin Dashboard</div>

            <div class="card-body">

                <h1>Admin Dashboard</h1>

                <a href="{{ route('admin.logout') }}" class="btn btn-danger" >Logout</a>

            </div>
        </div>
    </div>
</div>

@endsection
