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
                    <table class="table"  style="table-layout: fixed; width: 100%;">
                        <thead>
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Job Type</th>
                            <th scope="col">Job Seat</th>
                            <th scope="col">Job Details</th>
                            <th scope="col">Job Salary</th>
                            <th scope="col">Apply Ends</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($jobs as $job)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $job->job_title }}</td>
                                <td>{{ $job->job_type }}</td>
                                <td>{{ $job->job_seat }}</td>
                                <td style="word-wrap: break-word;">{{ $job->job_details }}</td>
                                <td>{{ $job->job_salary }}$</td>
                                <td>{{ $job->apply_date }}</td>
                                <td>
                                    <a href="{{ url('request_list/delete') }}/{{ $job->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                      </table>



                </div>

            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">{{ __('Job Posting') }}</div>
                <div class="card-body">
                    @if (session('status') )
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ url('job_post/insert') }}">
                        @csrf
                        <div class="form-group mb-3">
                          <label >Job Title</label>
                          <input type="text" name="title" class="form-control" placeholder="Enter Job Title" required>
                        </div>
                        <div class="form-group mb-3">
                          <label >Job Type</label>
                          <select class="form-select" name="type" aria-label="Default select example" required>
                            <option selected>Select One</option>
                            <option value="Full-Time">Full-Time</option>
                            <option value="Part-Time">Part-Time</option>
                          </select>
                        </div>
                        <div class="form-group mb-3">
                            <label >Applicants Need</label>
                            <input type="number" name="seat" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label >Job Deadline</label>
                            <input type="date" name="date" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label >Job Salary</label>
                            <input type="number" name="salary" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label >Job Details</label>
                            <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="3" required></textarea>
                            @error('details')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add Job</button>
                    </form>
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
