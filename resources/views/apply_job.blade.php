@extends('layouts.menubar')

@auth

@section('apply_job')

<div class="container">
    <div class="row mt_20 justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">{{ __('Job Apply') }}</div>
                <div class="card-body">
                    @if (session('status') )
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ url('apply_job/insert') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label >Full Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label >Enter Email</label>
                          <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label >Phone Number</label>
                          <input type="number" name="number" class="form-control" placeholder="Enter Phone Number" required>
                        </div>
                        <div class="form-group mb-3">
                            <label >Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address" required>
                        </div>
                        <div class="form-group mb-3">
                            <label >Upload Your Photo</label>
                            <input type="file" name="photo" class="form-control" placeholder="Upload Your Photo" required>
                            @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label >About Me</label>
                            <textarea class="form-control" name="about" id="exampleFormControlTextarea1" rows="3" placeholder="About Me (Max 200 word)" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label >Upload Your CV</label>
                            <input type="file" name="cv" class="form-control" placeholder="Upload Your CV/Resume file. Max size 2MB" required>
                            @error('cv')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <input type="text" value="{{ $job_id }}" hidden name="job_id">
                        <button type="submit" class="btn btn-primary">Apply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@endauth
