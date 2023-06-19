@extends('layouts.app')

@section('company')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Event Apply List') }}</div>



                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <table class="table" >
                        <thead>
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Applicant Name</th>
                            <th scope="col">Event Title</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($joins as $join)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td scope="row">{{ App\Models\User::find($join->apply_id)->org_name }}</td>
                                <td scope="row">{{ App\Models\Event::find($join->event_id)->event_title }}</td>
                                <td>
                                    {{-- <a href="{{ url('job_list/delete') }}/{{ $job->id }}" class="btn btn-danger">Delete</a> --}}
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
