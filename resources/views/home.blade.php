@extends('layouts.app')

@auth

@section('admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <p>User name: {{ Auth::user()->name_id }}</p>
                    <p>User Mode: {{ Auth::user()->org_name }}</p>
                    <p>User mail: {{ Auth::user()->email }}</p>
                    <p>User Created at: {{ Auth::user()->created_at }}</p>

                    {{ $user_count }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('guest')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">


                    {{ __('Page not ready!') }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@endauth
