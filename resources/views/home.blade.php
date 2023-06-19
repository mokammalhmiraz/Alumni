@extends('layouts.app')

@auth

@section('dashboard')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <p>User name: {{ Auth::user()->name_id }}</p>
                    <p>User Mode: {{ Auth::user()->org_name }}</p>
                    <p>User mail: {{ Auth::user()->email }}</p>
                    <p>User Created at: {{ Auth::user()->created_at }}</p>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('userprofile')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile Photo') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{ url('photo_update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex justify-content-between">
                            <input type="file" name="photo">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                        @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Phone Number') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{ url('number_update') }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-between">
                            <input type="number" name="number" placeholder="Phone Number" style="width: 90%;padding-top: 5px; padding-left:10px;" required>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Location') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{ url('location_update') }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-between">
                            <input type="text" name="location" placeholder="Your Location" style="width: 90%;padding-top: 5px; padding-left:10px;" required>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('About Me') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{ url('info_update') }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-between">
                            <textarea style="padding-top: 5px; padding-left:10px" placeholder="Details About Your's" name="about" cols="85%" rows="1" required></textarea>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Education') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{ url('edu_update') }}" method="POST">
                        @csrf
                        <div class="">
                            <input type="text" name="edu_title" placeholder="Name of programme" style="width: 100%;padding-top: 5px; padding-left:10px;margin-bottom: 20px;" required>
                            <div class="d-flex justify-content-between">
                                <span>Start Year</span>
                                <input type="date" name="start" placeholder="Start Year" style="width: 40%;margin-bottom: 20px;" required>
                                <span>End Year</span>
                                <input type="date" name="end" placeholder="End Year" style="width: 40%;margin-bottom: 20px;" required>
                            </div>
                            <textarea style="padding-top: 5px; padding-left:10px;margin-bottom: 15px;" placeholder="About Education" name="edu_about" cols="100%" rows="2" required></textarea>
                            <button type="submit" class="btn btn-success d-block">Add</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Experience') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{ url('exp_update') }}" method="POST">
                        @csrf
                        <div class="">
                            <input type="text" name="exp_title" placeholder="Name of programme" style="width: 100%;padding-top: 5px; padding-left:10px;margin-bottom: 20px;" required>

                            <textarea style="padding-top: 5px; padding-left:10px;margin-bottom: 15px;" placeholder="About Experience" name="exp_about" cols="100%" rows="2" required></textarea>
                            <button type="submit" class="btn btn-success d-block">Add</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@endauth
