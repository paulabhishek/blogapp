@extends('welcome')
@section('body')
    <br><br>
{{--@isset($post->file)--}}
{{--    <img src="{{ asset('storage/' . $post->file) }}"--}}
{{--         width="500px" height="100px"><br>--}}
{{--@endisset--}}
<div class="card">
    <div class="card-header mb-0 h1">
        {{$post->title}}
    </div>
    @isset($post->file)
    <img class="card-img-top" src="{{ asset('storage/' . $post->file) }}" width="298px" height="500px" alt="Card image cap">
    @endisset
    <div class="card-body">
        <p class="card-text mb-0 h4">{{ $post->body}}</p>
    </div>
    <div class="card-footer">
        <small class="text-muted mb-0 h6">
            Created: {{\App\Http\Controllers\PostController::time_elapsed_string($post->created_at, false)}}
        </small>
    </div>
</div><br>
@if(Auth::guest())
    <p>Login to Comment</p>
@else
    <div class=" mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="d-flex flex-column col-md-8">
                <div class="d-flex flex-row align-items-center text-left comment-top p-2 bg-white border-bottom px-4">
                    Comments
                </div>

                <div class=" bg-white p-2 px-4">
                    <form method="POST" action="{{ action('CommentController@store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="  mt-4 mb-4">
{{--                            <input  type="text"  class="form-control mr-3" placeholder="Add comment">--}}
                            <textarea class="form-control" required="required" placeholder="Add comment" rows="1"></textarea><br>
                            <input class="btn btn-secondary btn-md" value="Comment" type="submit" >
                        </div>
                    </form>

@endif


<h2>Comments</h2>

@foreach($post->comments as $commenta )

                        <div class="commented-section mt-2">
                        <div class="d-flex flex-row align-items-center commented-user">
                            <h5 class="mr-2">{{($commenta->user->name)}}</h5><span class="dot mb-1"></span><span class="mb-1 ml-2">4 hours ago</span>
                        </div>
                        <div class="comment-text-sm"><span>{{$commenta->comment}}</span></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

