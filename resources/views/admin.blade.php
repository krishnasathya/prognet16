@extends('component.admin-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-light">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <button type="submit" class="btn btn-primary ">Product, Kategori, dan Courier</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
