@extends('layouts.app')

@section('content')
<div class="container" id="root">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Avaiable users</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <users-avaiable></users-avaiable>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
@endsection
