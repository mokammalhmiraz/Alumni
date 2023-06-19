@extends('layouts.menubar')

@auth
@section('event')

    <!-- === HEADER PART START === -->
    <section class="user_content">
        <div class="container">
            <div class="row">
                @foreach ($alumnis as $alumni)
                    <div class="col-4">
                        <div class="card mt-5" style="width: 18rem;">
                            <img class="card-img-top"  alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">{{ $alumni->org_name }}</h5>
                              <p class="card-text">{{ $alumni->email }}</p>
                              <a href="#" class="btn btn-primary">View Profile</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
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




