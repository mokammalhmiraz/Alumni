@extends('layouts.app')

@section('admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Jobs') }}</div>

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
                            <th scope="col">Job title</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Job Type</th>
                            <th scope="col">Job Salary</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($jobs as $job)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $job->job_title }}</td>
                                <td>{{ App\Models\User::find($added_by)->org_name }}</td>
                                <td>{{ $job->job_type }}</td>
                                <td>{{ $job->job_salary }}$</td>
                                <td>
                                    <a href="{{ url('job_list/delete') }}/{{ $job->id }}" class="btn btn-danger">Delete</a>
                                </td>
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
