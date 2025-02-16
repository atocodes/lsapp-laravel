@extends("layouts.app")
@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="col">
                <h3><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No Posts Found</p>
    @endif
@endsection