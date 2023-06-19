@extends('layouts.menubar')
@auth

@section('forum')

<!-- === HEADER PART START === -->
<section class="forum">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="post_btn">
                    <form action="{{ url('forum/insert') }}" method="POST" style="widows: 100%;">
                        @csrf
                        <div class="d-flex">
                            <textarea placeholder="What do you want to share?" name="post" id="" cols="100%" rows="1" required></textarea>
                            <button class="btn" type="submit">Share</button>
                        </div>
                    </form>
                </div>
            </div>
            @foreach ($all as $data)
                <div class="col-12">
                    <div class="single_cmnt">
                        <div class="head_wrap">
                            <h6>{{ App\Models\User::find($data->added_by)->org_name }}</h6>
                            <p>{{ App\Models\User::find($data->added_by)->status }}</p>
                        </div>
                        <div class="body_wrap">
                            <p>{{ $data->post }}</p>
                        </div>
                        <div class="btn_wrap d-flex justify-content-around">
                            <form action="{{ url('forum/view') }}">
                                @csrf
                                <input type="number" name="id" value="{{ $data->id }}" hidden>
                                <button type="submit" class="btn1">View</button>
                            </form>
                            <a href="" class="btn1">Message</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

@endsection

@endauth


