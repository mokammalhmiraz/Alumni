@extends('layouts.menubar')

@auth

@section('company_list')

<section class="companis_list">
    <div class="container">
        <div class="row">



            <div class="col-12">
                <div class="com_head">
                    <h2>All Companies</h2>
                </div>
            </div>
            @foreach ($users as $user)
            <div class="col-3">
                <div class="companis text-center">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <h5>{{ $user->org_name }}</h5>
                    <p>Establish {{ $user->created_at }}</p>
                    <div class="available">
                        5 jobs available
                    </div>

                    <div class="view">
                        <form method="GET" action="{{ url('company') }}">
                            <input type="text" value="{{ $user->id }}" hidden name="user_id">
                            <button type="submit">
                                View Profile
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@endauth


