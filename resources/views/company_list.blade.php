@extends('layouts.app')

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
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $user->org_name }}</td>
                                <td>{{ $user->name_id }}</td>
                                <td>{{ $user->email }}</td>
                              </tr>
                        @endforeach

                        </tbody>
                      </table>



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
