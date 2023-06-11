@extends('layouts.menubar')

@auth

@section('readmore')

    <!-- === HEADER PART START === -->
    <div class="user_content">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between details">
                        <div>
                            <p>Applicants</p>
                            <p>10</p>
                        </div>
                        <div>
                            <p>Job Type</p>
                            <p>{{ App\Models\Job::find($job_id)->job_type }}</p>
                        </div>
                        <div>
                            <p>Salary</p>
                            <p>{{ App\Models\Job::find($job_id)->job_salary }}$ - Mannual</p>
                        </div>
                        <div>
                            <a href="#" class="btn3">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="offer">
                          <h4>{{ App\Models\Job::find($job_id)->job_title }}</h4>
                          <p>Vacancy: {{ App\Models\Job::find($job_id)->job_seat }}</p>
                          <p>Deadline: {{ App\Models\Job::find($job_id)->apply_date }}</p>
                          <p>{{ App\Models\Job::find($job_id)->job_details }}</p>
                    </div>
                  </div>
            </div>

        </div>
    </div>

@endsection

@endauth



