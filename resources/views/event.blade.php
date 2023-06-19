@extends('layouts.menubar')

@auth
@section('event')

    <!-- === HEADER PART START === -->
    <section class="event_list">
        <div class="container">
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-12">
                        <div class="event_content">
                            <div class="head">
                                <h2>{{ $event->event_title }}</h2>
                                <p>{{ App\Models\User::find($event->added_by)->org_name }}</p>
                            </div>
                            <div class="require">
                                <p>
                                Event Type: {{ $event->event_type }} <br>
                                @if ($event->event_platfrom == 'null')
                                    Location: {{ $event->event_location }}
                                @elseif ($event->event_location == 'null')
                                    Platform: {{ $event->event_platfrom }}
                                @endif
                                <br>
                                Date: {{ $event->event_deadline }}
                                </p>
                            </div>
                            <div class="des">
                                <h5>Event Description</h5>
                                <p>{{ $event->event_description }}</p>
                            </div>
                            <div class="btns d-flex justify-content-around">
                                <a href="readmore" class="btn1">Read More</a>
                                    @if (App\Models\Eventapply::all()->value('apply_id') == Auth::id())
                                        <a href="" class="btn2">Already Applied</a>
                                    @else

                                        <a href="{{ url('event/update') }}/{{ $event->id }}"  class="btn2">Join Now</a>
                                    @endif
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




