@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ceritanya Halaman Admin</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                    Selamat Datang {{$user->role->full_name}} <br> {{$user->name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
