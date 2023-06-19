@extends('layouts.menubar')

@auth
@section('index')



    <!-- === HEADER PART START === -->
    <div class="user_content">
        <div class="container">

            <div class="row">
                @foreach ($user_id as $user)
                <div class="col-4">
                    <div class="content">
                        <div class="user">
                            <div class="img mx-auto">
                                <img src="images\uploads\profile\{{ $user->photo }}" alt="" width="100%">
                            </div>
                            <h4>{{ Auth::user()->org_name }}</h4>
                            <p>{{ $user->location }}</p>
                        </div>
                        <div class="user_details">
                            <p>{{ Auth::user()->email }}</p>
                            <p>+88{{ $user->number }}</p>
                        </div>
                        <div class="user_skills">
                            <h4>Skills</h4>
                            <div class="sname">
                                <span class="bg-success">HTML</span>
                                <span class="bg-success">CSS</span>
                                <span class="bg-success">JAVA</span>
                                <span class="bg-success">C++</span>
                            </div>
                        </div>
                        <div class="user_lang">
                            <h4>Language</h4>
                        </div>
                    </div>
                </div>
                <div class="col-8">

                  <div class="content">
                    <div class="row">
                      <div class="col-12">
                        <div class="about">
                              <h4>About Me </h4>
                              <p>{{ $user->about }}</p>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="edu">
                          <h4>Education</h4>
                          <div class="edu_details">
                            <h6>{{ $user->edu_title }}</h6> <p>{{ $user->start }}-{{ $user->end }}</p>
                                <p>{{ $user->edu_about }}</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="edu">
                          <h4>Experience</h4>
                          <div class="edu_details">
                            <h6>{{ $user->exp_title }}</h6> <p></p>
                                <p>{{ $user->exp_about }}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->



    <!-- === HEADER PART START === -->
    <!-- === HEADER PART END === -->




@endauth
@endsection
