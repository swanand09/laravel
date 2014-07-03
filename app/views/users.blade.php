@extends('layout')

@section('content')
    @foreach($users as $user)
        <p><a href="{{url('users/'.$user->id)}}">{{ $user->name }}</a></p>
    @endforeach
@stop
<script src="{{ asset('js/jquery-1.9.1.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
{{ HTML::script('js/default.js') }}
{{ HTML::style('css/style.css') }}