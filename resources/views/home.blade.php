@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <ul style="list-style: none; margin: 10px 0 0; padding: 0">
                        <li>id: {{ $user->id }}</li>
                        <li>name: {{ $user->name }}</li>
                        <li>email: {{ $user->email }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
