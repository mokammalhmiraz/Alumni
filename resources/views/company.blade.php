@extends('layouts.menubar')

@auth

@section('company')

<div class="user_content">
    <div class="container">

        <div class="row">
            <div class="col-4">
                <div class="content">
                    <div class="user">
                        <div class="img mx-auto">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        {{-- <h4>{{ Auth::user()->name_id }}</h4> --}}
                        <h4>{{ App\Models\User::find($comp_id)->org_name }}</h4>
                        <p>Established Since {{ App\Models\User::find($comp_id)->created_at->format('Y') }}</p>
                    </div>
                    <div class="user_details">
                        <p>{{ App\Models\User::find($comp_id)->email }}</p>
                        <p>+8801000000001</p>
                    </div>
                    {{-- <div class="user_skills">
                        <h4>Skills</h4>
                        <div class="sname">
                            <span class="bg-success">HTML</span>
                            <span class="bg-success">CSS</span>
                            <span class="bg-success">JAVA</span>
                            <span class="bg-success">C++</span>
                        </div>
                    </div> --}}
                    <div class="user_lang">
                        {{-- <h4>Language</h4> --}}
                        <p>6 jobs available</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
              <div class="content">
                <div class="row">
                  @foreach ($jobs as $job)
                  <div class="col-12">
                    <div class="offer">
                          <h4>{{ $job->job_title }}</h4>
                          <p>Vacancy: {{ $job->job_seat }}</p>
                          <p>Deadline: {{ $job->apply_date }}</p>
                          <a class="btn1">Read More</a>
                          @if ($job->apply_date >= $c_date)
                          <a href="readmore" class="btn2">Apply Now</a>
                          @else
                          <span class="btn2">Apply Time Over!</span>
                          @endif
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
        </div>

    </div>
</div>

@endsection

@endauth



