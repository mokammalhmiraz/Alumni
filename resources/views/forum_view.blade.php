@extends('layouts.menubar')
@auth

@section('forumview')

<!-- === HEADER PART START === -->
<section class="forum">
    <div class="container">
        <div class="row">

            @foreach ($datas as $data)
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

                            <a href="" class="btn1">Message</a>
                        </div>
                    </div>
                    <div class="comments">
                        <p> {{ $total }} Comments</p>
                        @foreach ($comments as $comment)
                        <div class="comment_section">
                            <h6>{{ App\Models\User::find($comment->user_id)->org_name }}</h6>
                            <p>{{ $comment->comment }}</p>
                        </div>
                    @endforeach
                    </div>
                </div>
            @endforeach

            <div class="col-12">
                <div class="post_btn mb-5">

                    <form action="{{ url('forum/comment') }}" method="POST" style="widows: 100%;">
                        @csrf
                        <div class="d-flex">
                            <textarea placeholder="Comment" name="comment" id="" cols="100%" rows="1" required></textarea>
                            <input type="number" name="forum_id" value="{{ $data->id }}" hidden>
                            <button class="btn" type="submit">Comment</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@endauth


