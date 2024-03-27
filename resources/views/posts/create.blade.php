@extends('layouts.app')
@section('content')
    <h1>Create Post</h1>
    <form method='POST' action='PostsController@store'>
        <input name="title"></label>
        <input name="body"></label>
        <button type="submit">Submit</button>
    </form>
@endsection
