@extends('layouts.menubar')
@auth

@section('jobs_list')

<!-- === HEADER PART START === -->
<section class="job_list">
    <div class="container">
        <div class="row">
            @foreach ( $jobs as $job)
            <div class="col-12">
                <div class="job_content">
                    <div class="head">

                        <h2>{{ App\Models\User::find($added_by)->org_name }}</h2>
                    </div>
                    <div class="require">
                        <p>
                        Post Name: {{ $job->job_title }} <br>
                        Vacancy: {{ $job->job_seat }} <br>
                        Deadline: {{ $job->apply_date }} <br>
                        Budget: {{ $job->job_salary }}$
                        </p>
                    </div>
                    <div class="des">
                        <h5>Job Description</h5>
                        <p>{{ $job->job_details }}</p>
                    </div>
                    <div class="btns d-flex justify-content-around">
                        <a href="" class="btn1">Read More</a>
                        <a href="" class="btn2">Apply Now</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection

@endauth


