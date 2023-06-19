@extends('layouts.app')

@section('company')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>{{ __('Event List') }}</div>
                <a href="event_post" class="btn btn-primary text-end">Add Event</a>
                </div>



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
                            <th scope="col">Event Title</th>
                            <th scope="col">Event Type</th>
                            <th scope="col">Event Seat</th>
                            <th scope="col">Event Participants</th>
                            <th scope="col">Event Speaker</th>
                            <th scope="col">Event Platfrom</th>
                            <th scope="col">Event Location</th>
                            <th scope="col">Event Description</th>
                            <th scope="col">Event Deadline</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td scope="row">{{ $event->event_title }}</td>
                                <td scope="row">{{ $event->event_type }}</td>
                                <td scope="row">{{ $event->event_seat }}</td>
                                <td scope="row">{{ $event->event_participants }}</td>
                                <td scope="row">{{ $event->event_speaker}}</td>
                                <td scope="row">{{ $event->event_platfrom }}</td>
                                <td scope="row">{{ $event->event_location }}</td>
                                <td scope="row" style="white-space: nowrap; overflow: hidden;">{{ $event->event_description }}</td>
                                <td scope="row">{{ $event->event_deadline }}</td>
                                <td>
                                    <a href="{{ url('event_list/delete') }}/{{ $event->id }}" class="btn btn-danger">Delete</a>
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
