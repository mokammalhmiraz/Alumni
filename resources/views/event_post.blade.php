@extends('layouts.app')

@section('company')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">{{ __('Event Posting') }}</div>
                <div class="card-body">
                    @if (session('status') )
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ url('event_post/insert') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                          <label >Event Title</label>
                          <input type="text" name="title" class="form-control" placeholder="Enter Event Title" required>
                        </div>
                        <div class="form-group mb-3">
                          <label >Event Type</label>
                          <select class="form-select" name="type" aria-label="Default select example" required>
                            <option selected>Select One</option>
                            <option value="Offline">Offline</option>
                            <option value="Online">Online</option>
                          </select>
                        </div>
                        <div class="form-group mb-3">
                            <label >Event Seat</label>
                            <input type="number" name="seat" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label >Event Speaker</label>
                            <input type="text" name="speaker" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label >Event Platfrom</label>
                            <input type="text" name="platfrom" class="form-control" placeholder="">
                            @error('platfrom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label >Event Location</label>
                            <input type="text" name="location" class="form-control" placeholder="">
                            @error('location')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label >Event Deadline</label>
                            <input type="date" name="deadline" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label >Event Banner</label>
                            <input type="file" name="banner" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label >Event Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add Event</button>
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
