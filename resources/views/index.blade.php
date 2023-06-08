@extends('layouts.menubar')

@auth
@section('index')



    <!-- === HEADER PART START === -->
    <div class="user_content">
        <div class="container">

            <div class="row">
                <div class="col-4">
                    <div class="content">
                        <div class="user">
                            <div class="img mx-auto">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <h4>{{ Auth::user()->org_name }}</h4>
                            <p>Dhaka, Bangladesh</p>
                        </div>
                        <div class="user_details">
                            <p>{{ Auth::user()->email }}</p>
                            <p>+8801000000001</p>
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
                              <h4>About Me <i class="fa fa-pencil" aria-hidden="true"></i></h4>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ea
                                  quaerat magnam commodi voluptates, maiores dignissimos
                                  pariatur perferendis voluptatem
                                  consectehenderit aspernatur, iste numquam id odio
                                  quia incidunt qui autem deserunt officiis. Molestias, nesciunt?
                                   Ipsam, soluta. Providen, debitis ipsa quisquam, quasi consequr
                                  nihil, dolores saepe non molestiae ducimus exercitationem eius!
                                  Sit reiciendis quod dignissimem, fugit dignissimos in</p>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="edu">
                          <h4>Education</h4>
                          <div class="edu_details">
                            <h6>Computer Science</h6> <p>2018-2022</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ea
                                    quaerat magnam commodi voluptates, maiores dignissimos
                                    pariatur perferendis voluptatem
                                    consectehenderit aspernatur, iste numquam id odio
                                    quia incidunt qui autem deserunt officiis. Molestias, nesciunt?
                                     Ipsam, soluta. Providen, debitis ipsa quisquam, quasi consequr
                                    nihil, dolores saepe non molestiae ducimus exercitationem eius!
                                    Sit reiciendis quod dignissimem, fugit dignissimos in</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="edu">
                          <h4>Experience</h4>
                          <div class="edu_details">
                            <h6>Web designer</h6> <p>2018-2022</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                    tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus
                                    sit amet augue nec urna efficitur tincidunt. Vivamus consectetur
                                    aliquam lectus commodo viverra.</p>
                          </div>
                          <div class="edu_details">
                            <h6>Web designer</h6> <p>2018-2022</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                    tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus
                                    sit amet augue nec urna efficitur tincidunt. Vivamus consectetur
                                    aliquam lectus commodo viverra.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
